let burger = document.querySelector('.header-top__burger');
let menu = document.querySelector('.header-top__menu');
let menuLink = document.querySelectorAll('.header-top__link');

function activeBurger() {
    burger.classList.toggle('active');
    menu.classList.toggle('active');

    function showMenuLink() {
        for (let i = 0; i < menuLink.length; i++) {
            menuLink[i].classList.toggle('active');
        }
    }

    setTimeout(showMenuLink, 300);

}

burger.addEventListener("click", activeBurger);


let tab = function () {
    let lilBlock = document.querySelectorAll('.lil-block__item'),
        bigBlock = document.querySelectorAll('.big-block__item'),
        tabName;
    lilBlock.forEach(item => {
        item.addEventListener("click", selectLilTab);
    })

    function selectLilTab() {
        lilBlock.forEach(item => {
            item.classList.remove('tab-active');
        })
        this.classList.add('tab-active');
        tabName = this.dataset.tab;
        selectBigTab(tabName);
    }

    function selectBigTab(tabName) {
        bigBlock.forEach(item => {
            item.classList.contains(tabName) ? item.classList.add('tab-active') : item.classList.remove('tab-active');
        })
    }
}
tab();

// slick-slider
$('.slider').slick({
    dots: true,
    responsive: [
    {
        breakpoint: 2561,
        settings: "unslick"
    },
    {
        breakpoint: 1025,
        arrows: true,
        adaptiveHeight: true,
        centerMode: true,
        variableWidth: true,
        // slideToShow: 1,
    }
    ]
});

// плавное появление
const animItems = document.querySelectorAll('.anim-items');

if (animItems.length > 0) {
    window.addEventListener("scroll", animOnScroll);

    function animOnScroll() {
        for (let i = 0; i < animItems.length; i++) {
            const animItem = animItems[i];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;
            let animItemPoint = window.innerHeight - animItemHeight / animStart;
            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }
            if (pageYOffset > animItemOffset - animItemPoint && pageYOffset < animItemOffset + animItemHeight) {
                animItem.classList.add('_active');
            } else {
                if (!animItem.classList.contains("anim-no-hide")) {
                    animItem.classList.remove('_active');
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
        };
    }
    setTimeout(animOnScroll, 300);
}

let btnPopUp = document.querySelector('.main-btn'),
    popUp = document.querySelector('.popUp'),
    closePopUp = document.querySelector('.popUp__close');

function showPopUp(){
    popUp.classList.add('active');
}

btnPopUp.addEventListener("click", showPopUp);
closePopUp.addEventListener("click", function () {
    popUp.classList.remove('active');
});

console.log(btnPopUp);