document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('.apple-effect', {y: '250', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-effect-right', {x: '-250', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-effect-left', {x: '250', scrollTrigger: {
            scrub: true,
        }});
});

