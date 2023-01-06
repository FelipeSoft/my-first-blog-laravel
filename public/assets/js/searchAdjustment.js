let container = document.querySelector('div.container-sr');
let footer = document.querySelector('footer');

window.onload = function () {
    if(container.querySelector('div.common-new') === null){
        document.body.style.height = '100vh';
        footer.style.position = 'absolute';
        footer.style.left = '0';
        footer.style.bottom = '0';
        footer.style.right = '0';
    }
}

function inputValue(){

}
