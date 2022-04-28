const app = {
    init: function() {
        scrolling.init();
        if (document.querySelector('.menu__item-link')) {
            menuActive.init();
        }
    }
}
document.addEventListener('DOMContentLoaded', app.init);

const scrolling = {
    init: function() {
        scrolling.checkScroll();
    },

    checkScroll: function() {
        window.onscroll = function (e) {
            const position = window.scrollY;
            
            scrolling.toggleBackgroundHeader(position);

            menuActive.changeActiveElement(position);
        }
    },

    toggleBackgroundHeader: function(scrollY) {
        if (scrollY > 0) {
            document.querySelector('header').classList.add('bg-dark');
        } else {
            document.querySelector('header').classList.remove('bg-dark');
        }
    }
};

const menuActive = {
    nbElement: 0,
    posElement: [],

    init: function() {
        menuActive.chargeInfoElement();
    },

    chargeInfoElement: function() {
        const elements = document.querySelectorAll('.menu__item-link');
        menuActive.nbElement = elements.length;

        for (let element of elements) {
            element = document.getElementById(element.href.split('#')[1]);
            const rect = element.offsetTop;
            menuActive.posElement.push(rect);
        }
        menuActive.posElement.push(document.getElementById('footer').offsetTop);

        const position = window.scrollY;
        menuActive.changeActiveElement(position);
    },

    changeActiveElement: function(scrollY) {
        menuActive.removeActiveElement();

        for (const position of menuActive.posElement) {
            if (scrollY + 128 < position) {
                const numElement = menuActive.posElement.indexOf(position);
                const element = document.querySelector('.menu__item:nth-child(' + numElement + ') .menu__item-link');
                element.classList.add('menu__item-link--active');
                break;
            }
        }
    },

    removeActiveElement: function() {
        const elementId = document.querySelectorAll('.menu__item-link');
        for (let element of elementId) {
            element.classList.remove('menu__item-link--active');
        }
    }
};

if (document.getElementById('myCanvas')) {
    window.onload = function() {
        try {
            TagCanvas.Start('myCanvas', 'tags', {
                imageMode: 'text',
                textColour: '#ff7700',
                outlineColour: '#00000000',
                reverse: true,
                depth: 0.8,
                initial: [-0.050, -0.040],
                maxSpeed: 0.1,
                activeCursor: 'default',
                wheelZoom: false,
                shadowBlur: 2,
            });
        } catch(e) {
            document.getElementById('myCanvasContainer').style.display = 'none';
        }
    }; 
}