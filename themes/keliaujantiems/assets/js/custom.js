'use strict';

window.addEventListener('DOMContentLoaded', () => {

    // Header sticky START
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

    // Mobile menu START

    const showMenu = document.getElementById('switch-link');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    document.onclick = function (event) {
        let target = (event && event.target);
        let display = 'none';
        let switchDisplay = 'block';
        document.body.classList.remove('modal_is_open');
        while (target.parentNode) {
            if (target == mobileMenu) {
                display = 'block';
                switchDisplay = 'none';
                document.body.classList.add('modal_is_open');
                break;
            } else if (target == showMenu) {
                display = 'block';
                switchDisplay = 'none';
                document.body.classList.add('modal_is_open');
                break;
            } else if (target == closeMenu) {
                display = 'none';
                switchDisplay = 'block';
                document.body.classList.remove('modal_is_open');
                break;
            }
            target = target.parentNode;
        }
        mobileMenu.style.display = display;
        showMenu.style.display = switchDisplay;
    };
});