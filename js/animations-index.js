jQuery(document).ready(($) => {
    gsap.from('.gsap-main-logo', { duration: 1, y: 60, opacity: 0, ease: 'expo.out' })
    gsap.from('.gsap-main-text', { duration: 1, y: 60, opacity: 0, ease: 'expo.out', delay: .1 })
    gsap.from('.gsap-main-buttons', { duration: 1, y: 60, opacity: 0, ease: 'expo.out', delay: .2 })
})