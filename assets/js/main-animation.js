'use strict';

gsap.timeline({ defaults: { duration: 0.6 }})
  .to(".p-mainAnimation__cover.-first", { delay: 0.4, duration: 1, y: -220, 'z-index': 10 })
  .to(".p-mainAnimation__logoFirst", { duration: 0, 'z-index': 100 })
  .to(".p-mainAnimation__cover.-second", { duration: 0.4, y: '-100vh' })
  .to(".p-mainAnimation__cover.-second", { delay: 0.6, duration: 1, opacity: 0 })
  .to(".p-mainAnimation__logoFirst", { duration: 0, display: 'none' })
  .to(".p-mainAnimation__logoSecondWrapper", { duration: 1.8, opacity: 1 })

gsap.timeline({ defaults: { duration: 0 }})
  .to(".p-mainAnimation__logoFirst", { delay: 1.6, 'color': '#ffffff' })
  .to(".p-mainAnimation__logoSecondWrapper", { display: 'block' })
  .to(".p-mainAnimation__cover.-second", { delay: 2.4, display: 'none' })