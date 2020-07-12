function restrictAlphabets(e) {
    var x = e.which || e.keycode;
    if ((x >= 48 && x <= 57))
        return true;
    else
        return false;
}

function allowOnlyAlphabets(e) {
    var x = e.which || e.keycode;
    if ((x >= 97 && x <= 122) || (x >= 65 && x <= 90) || x === 32)
        return true;
    else
        return false;
}

function allowAlphabets(e) {
    var x = e.which || e.keycode;
    if ((x >= 97 && x <= 122) || (x >= 65 && x <= 90) || x === 32 || x === 38)
        return true;
    else
        return false;
}

var acc = document.getElementsByClassName("myAccordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    };
}
