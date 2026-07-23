/*
 * mobile.js — self-contained (no jQuery required)
 * Handles the responsive hamburger menu toggle and the scroll-to-top button.
 */
(function () {
    'use strict';

    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        var toggle = document.querySelector('.navbar-toggle');
        var menu = document.getElementById('navbar-menu');

        // Mobile nav open/close
        if (toggle && menu) {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                menu.classList.toggle('in');
            });

            // Close the menu after tapping a link
            var links = menu.querySelectorAll('a');
            for (var i = 0; i < links.length; i++) {
                links[i].addEventListener('click', function () {
                    menu.classList.remove('in');
                });
            }

            // Close when tapping outside the nav
            document.addEventListener('click', function (e) {
                if (!menu.contains(e.target) && !toggle.contains(e.target)) {
                    menu.classList.remove('in');
                }
            });
        }

        // Scroll-to-top button
        var scrollBtn = document.getElementById('scroll-top');
        var scrollWrap = document.getElementById('scroll-Top');

        function toggleScrollBtn() {
            if (!scrollWrap) return;
            scrollWrap.style.display = (window.pageYOffset > 300) ? 'block' : 'none';
        }

        if (scrollBtn) {
            scrollBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            toggleScrollBtn();
            window.addEventListener('scroll', toggleScrollBtn);
        }
    });
})();
