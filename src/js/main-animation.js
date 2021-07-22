import { gsap } from "gsap";

gsap.timeline({ defaults: { duration: 0.6 }})
  .to(".p-mainAnimation__cover.-first", { delay: 0.4, duration: 1, y: '-100vh', 'z-index': 10 })
  .to(".p-mainAnimation__cover.-second", { duration: 0.4, y: '-100vh' }, 'invert')
  .to(".p-mainAnimation__logo", { duration: 0, 'z-index': 100 }, 'invert')
  .to(".p-mainAnimation__logo path", { duration: 0.1, 'fill': '#fff' }, 'invert+=0.2')
  .to(".p-mainAnimation__cover.-second", { delay: 0.4, duration: 1, opacity: 0 })
  .to(".p-mainAnimation__logo path", { delay: 0.4, 'fill': '#111' })
  .to(".p-mainAnimation__scrolldown", { delay: 0.4, duration: 0.8, ease: "power2.out", 'opacity': 1, y: 4 })
