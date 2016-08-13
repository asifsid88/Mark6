(function (window, document) {
var menu = document.getElementById('mark6-menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('mark6-menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }

    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
    document.getElementById('menu-items').classList.remove('vertical-center');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    } else {
        document.getElementById('menu-items').classList.add('vertical-center');
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);