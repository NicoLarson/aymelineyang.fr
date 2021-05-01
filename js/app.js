document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('header>div.carousel')

    let i = 0

    setInterval(() => {
        if (i == 0 && carousel.classList[1] == 'pic-00') {
            carousel.classList.add(`pic-0${i}`)
        } else if (i > 0) {
            carousel.classList.remove(`pic-0${i - 1}`)
            carousel.classList.add(`pic-0${i}`)
        } else if (i == 0 && carousel.classList[1] == 'pic-04') {
            carousel.classList.remove(`pic-04`)
            carousel.classList.add(`pic-0${i}`)
        }
        i < 4 ? i++ : i = 0
    }, 4000);

})