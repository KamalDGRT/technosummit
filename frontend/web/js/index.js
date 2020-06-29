
// https://twitter.com/msvaljek
// https://msvaljek.blogspot.com/2013/08/canvas-space-battle.html

/* 
    space battle with Phasers and tactical warp jumps
    sort of Star Trek inspired :)
*/

// standard shim
window.requestAnimFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

// helper functions
function randomMax(max) {
    return ~~(Math.random() * max);
}

var canvas = document.getElementById('mainCanvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var ctx = canvas.getContext('2d');

// globals
var twoPi = 2 * Math.PI,
    numShips = 100,
    shipTypes = [],
    shipSize = 4,
    trailLineWidth = 1,
    fireTrailWidth = 3,
    weaponPrecisionFactor = 8;

shipTypes.push({
    color: '#CAD8DB',
    warpTrailColor: 'rgba(141, 189, 240, 0.5)',
    trailLife: 30,
    impulseSpeedMax: 3,
    newDirectionCycle: 40,
    warpCycleMin: 350,
    warpCycleVar: 900,
    range: 33,
    fireColor: 'rgba(237, 209, 133, 0.8)',
    fireRecharge: 40,
    fireDischarge: 10
});

shipTypes.push({
    color: '#4E8258',
    warpTrailColor: 'rgba(111, 242, 63, 0.5)',
    trailLife: 50,
    impulseSpeedMax: 2,
    newDirectionCycle: 40,
    warpCycleMin: 500,
    warpCycleVar: 900,
    range: 30,
    fireColor: 'rgba(0, 255, 119, 0.8)',
    fireRecharge: 50,
    fireDischarge: 15
});

shipTypes.push({
    color: '#2CA3B0',
    warpTrailColor: 'rgba(232, 140, 74, 0.5)',
    trailLife: 40,
    impulseSpeedMax: 2,
    newDirectionCycle: 40,
    warpCycleMin: 700,
    warpCycleVar: 900,
    range: 40,
    fireColor: 'rgba(32, 222, 232, 0.8)',
    fireRecharge: 40,
    fireDischarge: 10
});



var Trail = function (x1, y1, x2, y2, color, trailTime) {
    this.x2 = x2;
    this.y2 = y2;

    this.x1 = x1;
    this.y1 = y1;

    this.color = color;

    var dy = (y2 - y1);
    var dx = (x2 - x1);
    this.angle = Math.atan2(dy, dx);

    var trailLifedelta = (Math.sqrt(Math.pow(dx, 2) + Math.pow(dy, 2)) / trailTime);
    this.dx = trailLifedelta * Math.cos(this.angle);
    this.dy = trailLifedelta * Math.sin(this.angle);

    this.next = undefined;
    this.previous = undefined;
};
Trail.prototype.draw = function () {

    this.x1 += this.dx;
    this.y1 += this.dy;

    ctx.strokeStyle = this.color;
    ctx.lineWidth = trailLineWidth;
    ctx.beginPath();
    var trailWidth = ~~(shipSize / 2);
    ctx.moveTo(this.x1 - trailWidth, this.y1 - trailWidth);
    ctx.lineTo(this.x2 - trailWidth, this.y2 - trailWidth);
    ctx.moveTo(this.x1 + trailWidth, this.y1 + trailWidth);
    ctx.lineTo(this.x2 + trailWidth, this.y2 + trailWidth);
    ctx.stroke();

    var dy = (this.y2 - this.y1);
    var dx = (this.x2 - this.x1);

    var distance = Math.sqrt(Math.pow(dx, 2) + Math.pow(dy, 2));

    if (distance < 3) {
        this.next = null;
        if (this.previous) {
            this.previous.next = this.next;
        } else {
            trails.head = null;
        }
    }
};

var Trails = function () {
    this.head = null;
};
Trails.prototype.add = function (x1, y1, x2, y2, color, trailTime) {

    var newTrail = new Trail(x1, y1, x2, y2, color, trailTime);

    if (this.head === null) {
        this.head = newTrail;
    } else {
        this.head.previous = newTrail;
        newTrail.next = this.head;
        this.head = newTrail;
    }
};
Trails.prototype.draw = function () {
    var p = this.head;
    while (p) {
        p.draw();
        p = p.next;
    }
};

var trails = new Trails();

var Ship = function () {
    this.x = ~~(Math.random() * canvas.width);
    this.y = ~~(Math.random() * canvas.height);

    this.pickNewDirection();
    this.shipClass = ~~(Math.random() * shipTypes.length);

    var shipType = shipTypes[this.shipClass];

    this.color = shipType.color;
    this.warpTrailColor = shipType.warpTrailColor;
    this.trailLife = shipType.trailLife;

    this.size = shipSize;
    this.newDirectionCounter = 1;
    this.newDirectionCycle = shipType.newDirectionCycle;
    this.impulseSpeedMax = shipType.impulseSpeedMax;

    this.warpCycleCounter = 1;
    this.warpCycle = shipType.warpCycleMin + (~~(Math.random() * shipType.warpCycleVar));

    this.range = shipType.range;
    this.fireColor = shipType.fireColor;
    this.fireRecharge = shipType.fireRecharge;
    this.fireCounter = 0;
    this.fireDischarge = shipType.fireDischarge;
    this.fireDischargeCounter = 0;
    this.target = null;
    this.weaponOffsetx = ~~(weaponPrecisionFactor * (Math.random() - 0.5));
    this.weaponOffsety = ~~(weaponPrecisionFactor * (Math.random() - 0.5));
};
Ship.prototype.draw = function (index) {

    this.newDirectionCounter = (this.newDirectionCounter + 1) % this.newDirectionCycle;

    if (this.newDirectionCounter === 0) {
        this.pickNewDirection();
    }

    this.x += this.dx;
    this.y += this.dy;

    if (this.x <= 0) {
        this.x = 0;
        this.pickNewDirection();
    }
    if (this.x >= canvas.width) {
        this.x = canvas.width;
        this.pickNewDirection();
    }
    if (this.y <= 0) {
        this.y = 0;
        this.pickNewDirection();
    }
    if (this.y >= canvas.height) {
        this.y = canvas.height;
        this.pickNewDirection();
    }

    this.warpCycleCounter = (this.warpCycleCounter + 1) % this.warpCycle;

    if (this.warpCycleCounter === 0) {
        var oldx = this.x;
        var oldy = this.y;

        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;

        trails.add(oldx, oldy, this.x, this.y, this.warpTrailColor, this.trailLife);
        // stop the ship after warp
        this.dx = 0;
        this.dy = 0;
    }

    ctx.beginPath();
    ctx.fillStyle = this.color;
    ctx.arc(this.x, this.y, this.size, 0, twoPi);
    ctx.fill();

    if (this.fireCounter > 0) {
        this.fireCounter--;
    } else {
        // find first enemy in the range and shoot at it
        for (var k = 0; k < ships.length; k++) {
            if (ships[k].shipClass !== this.shipClass) {
                var distance = Math.sqrt(Math.pow(ships[k].x - this.x, 2) + Math.pow(ships[k].y - this.y, 2));
                if (distance < this.range) {
                    this.target = ships[k];
                    this.fireCounter = this.fireRecharge;
                    this.fireDischargeCounter = this.fireDischarge;

                    break;
                }
            }
        }
    }

    if (this.fireDischargeCounter > 0 && this.target) {
        this.fireDischargeCounter--;

        ctx.lineWidth = fireTrailWidth;

        var firedistance = Math.sqrt(Math.pow(this.target.x - this.x, 2) + Math.pow(this.target.y - this.y, 2));
        if (firedistance < this.range) {
            ctx.beginPath();
            ctx.strokeStyle = this.fireColor;
            ctx.moveTo(this.x, this.y);
            ctx.lineTo(this.target.x + this.weaponOffsetx, this.target.y + this.weaponOffsety);
            ctx.stroke();
        }
    } else {
        this.target = null;
    }
};
Ship.prototype.pickNewDirection = function () {
    this.dx = ~~((0.5 - Math.random()) * 2 * this.impulseSpeedMax);
    this.dy = ~~((0.5 - Math.random()) * 2 * this.impulseSpeedMax);
};
var ships = [];

for (var i = 0; i < numShips; i++) {
    ships.push(new Ship());
}

window.onresize = function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
};

(function animloop() {
    requestAnimFrame(animloop);

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    trails.draw();
    for (var i = 0; i < ships.length; i++) {
        ships[i].draw(i);
    }
})();

