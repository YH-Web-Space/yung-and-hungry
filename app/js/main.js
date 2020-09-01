let burger = document.querySelector('.header-top__burger');
let menu = document.querySelector('.header-top__menu');
let menuLink = document.querySelectorAll('.header-top__link');

function activeBurger() {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
    document.body.classList.toggle('active');

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

let btnPopUp = document.querySelectorAll('.btnPopUp'),
    popUp = document.querySelector('.popUp'),
    closePopUp = document.querySelector('.popUp__close'),
    formPopUp = document.querySelector('.popUp__container'),
    popUpService = document.querySelector('.popUp__service'),
    header = document.querySelector('.header');
    console.log(popUpService);

function showPopUp(){
    header.classList.add('blur');
    document.body.classList.add('active');
    popUp.classList.add('active');
}
function hiddenPopUp(){
    popUp.classList.remove('active');
    header.classList.remove('blur');
    document.body.classList.remove('active');
}

btnPopUp.forEach(item => {
    item.onclick = function (e) {
        e.preventDefault();
        let dataBtn = this.dataset.ser;
        popUpService.setAttribute('Value', dataBtn);
        showPopUp();
    }
})
closePopUp.addEventListener("click", function () {
    hiddenPopUp()
});
popUp.onclick = function(e){
    let target = e.target;
    if (target.closest('div') != formPopUp){
        hiddenPopUp()

    }
}
// маска для формы
$(function($){
    $(".form-phone").mask("+38(999) 999-9999");
});

// Якорное Меню
function anchorMenu(event) {
    event.preventDefault();
    $('body').removeClass('active');
    // $('.header-top__burger').removeClass('active');
    // $('.header-top__menu').removeClass('active');
    let id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
        scrollTop: top
    }, 1000);
};
$(".anchor").on("click", "a", anchorMenu);
