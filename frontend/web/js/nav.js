
/* ---- particles.js config ---- */

particlesJS("particles-js", {
    particles: {
        number: {
            value: 80,
            density: {
                enable: true,
                value_area: 800,
            },
        },
        color: {
            value: ["#722F37", "#722F37", "#722F37", "#722F37"],
        },
        shape: {
            type: ["trinagle"],
            stroke: {
                width: 0,
                color: "#fff",
            },
            polygon: {
                nb_sides: 5,
            },
            image: {
                src:
                    "https://cdn.freebiesupply.com/logos/large/2x/slack-logo-icon.png",
                width: 100,
                height: 100,
            },
        },
        opacity: {
            value: 1,
            random: false,
            anim: {
                enable: false,
                speed: 2,
                opacity_min: 0.1,
                sync: false,
            },
        },
        size: {
            value: 8,
            random: true,
            anim: {
                enable: false,
                speed: 10,
                size_min: 10,
                sync: false,
            },
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: "#20B2AA",
            opacity: 0.4,
            width: 2,
        },
        move: {
            enable: true,
            speed: 5,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: true,
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 1200,
            },
        },
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: true,
                mode: "grab",
            },
            onclick: {
                enable: true,
                mode: "push",
            },
            resize: true,
        },
        modes: {
            grab: {
                distance: 140,
                line_linked: {
                    opacity: 1,
                },
            },
            bubble: {
                distance: 400,
                size: 40,
                duration: 2,
                opacity: 8,
                speed: 3,
            },
            repulse: {
                distance: 200,
                duration: 0.4,
            },
            push: {
                particles_nb: 4,
            },
            remove: {
                particles_nb: 2,
            },
        },
    },
    retina_detect: true,
});
