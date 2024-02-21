console.log('CleverOne Media')

// GSAP ANIMATIONS
gsap.registerPlugin(ScrollTrigger) 

// HERO BLOCK
gsap.from(".hero-bg-left", {
    scrollTrigger: {
        trigger: ".hero-bg-left",
        start: "top center"
    },
    x: 500,
    duration: 3,

});

gsap.from(".hero-bg-right", {
    scrollTrigger: {
        trigger: ".hero-bg-right",
        start: "top center",
    },
    x: -500,
    duration: 3
});

// SHOWCASE BLOCK
gsap.set('.showcase-track', {xPercent: -100});
gsap.to(".showcase-track", {
    scrollTrigger: {
        trigger: ".showcase-track",
        start: "top bottom",
        scrub: true,
    },
    x: 1600,
});

gsap.set('.sticker', {rotation: -25});
gsap.timeline({
    scrollTrigger:{
    trigger: ".sticker",
    scrub: 0.2,
    start: 'top center',
    end:'bottom top',
    }
})
.to('.sticker', {
    rotation: 25,
    ease: 'ease-in-out',
})