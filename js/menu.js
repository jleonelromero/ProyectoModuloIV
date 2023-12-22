document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.menu');

    menuBtn.addEventListener('click', function (event) {
        event.stopPropagation();
        menu.classList.toggle('show');
    });

    document.addEventListener('click', function () {
        menu.classList.remove('show');
    });

    menu.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    const submenuTriggers = document.querySelectorAll('.submenu-trigger');

    submenuTriggers.forEach(function (item) {
        item.addEventListener('click', function (event) {
            event.stopPropagation();
            const subMenu = item.querySelector('.submenu');
            subMenu.classList.toggle('show');
        });

        item.addEventListener('mouseenter', function (event) {
            const subMenu = item.querySelector('.submenu');
            subMenu.classList.add('show');
        });

        item.addEventListener('mouseleave', function (event) {
            const subMenu = item.querySelector('.submenu');
            subMenu.classList.remove('show');
        });
    });
});