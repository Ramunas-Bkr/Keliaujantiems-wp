'use strict';

window.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    let sticky = header.offsetTop;

    function addClassWhenScrolling() {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }

    window.addEventListener('scroll', addClassWhenScrolling);
});
