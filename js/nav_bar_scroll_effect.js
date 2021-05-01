document.addEventListener("DOMContentLoaded", () => {

    let navBar = document.querySelector('header')
    window.onscroll = function () {
        let winScroll = document.documentElement.scrollTop

        if (winScroll == 0) {
            navBar.classList.remove('color')
        } else {
            navBar.classList.add('color')
        }
    };





});
