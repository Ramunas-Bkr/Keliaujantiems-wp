'use strict';

window.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    let sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }

    window.onscroll = myFunction;
});
