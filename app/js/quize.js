let btn = document.querySelectorAll('.btn'),
    userVariant = document.querySelectorAll('.user_variant'),
    jopa = document.querySelectorAll('.quiz-cart');


function getCheckedCheckBoxes(e) {
    e.preventDefault();
    let cartQuestion = this.closest('.quiz-cart')
    let checkbox = cartQuestion.querySelectorAll('.checkbox');

    for (let i = 0; i < checkbox.length; i++){
        if (checkbox[i].checked){
            let input = this.previousElementSibling;
            input.setAttribute('Value', checkbox[i].value);
            let parent = this.parentNode;
            parent.classList.add('active');
        }else {
            this.classList.add('active');
        }
    }
}
btn.forEach(items => {
    items.addEventListener('click', getCheckedCheckBoxes);
})

$(function($){
    $(".form-phone").mask("+38(999) 999-9999");
});

