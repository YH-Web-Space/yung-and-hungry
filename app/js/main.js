let burger = document.querySelector('.header-top__burger');
let menu = document.querySelector('.header-top__menu');
let menuLink = document.querySelectorAll('.header-top__link');
console.log(burger);

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
        console.log(tabName);
        selectBigTab(tabName);
    }

    function selectBigTab(tabName) {
        bigBlock.forEach(item => {
            item.classList.contains(tabName) ? item.classList.add('tab-active') : item.classList.remove('tab-active');
        })
    }
}
tab();

