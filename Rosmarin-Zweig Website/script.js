const menuNav = document.getElementById('menu-with-Links');
var lastScrollTop = 0;

window.addEventListener('scroll', function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var navbar = document.getElementById('menu-with-Links');

    if(scrollTop > lastScrollTop) {
        navbar.style.marginTop = '-71px';
    } else {
        navbar.style.marginTop = '0px';
    }

    lastScrollTop = scrollTop;

})

