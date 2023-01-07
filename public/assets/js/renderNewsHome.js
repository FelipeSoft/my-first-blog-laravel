var count = 4;
const fixZero = (time) => time < 10 ? `0${time}` : time;

document.querySelector('div.container-populars main button.primary-button.load-more').addEventListener('click', async function(){
    count += 4;
    let response = await fetch('http://localhost/blog-laravel/public/api/');
    let result = await response.json();
    if(response.status === 200 && result !== []){
        if(count < result.length){
            renderNews(result.slice(countRenderedNews(), count));
        } else {
            renderNews(result.slice(countRenderedNews(), result.length));
            document.querySelector('div.container-populars main button.primary-button.load-more').style.display = 'none';
        }
    }
});

window.onload = async function(){
    let response = await fetch('http://localhost/blog-laravel/public/api/');
    let result = await response.json();
    if(response.status === 200 && result !== []){
        renderNews(result.slice(0, 4));
    }
}

function countRenderedNews(){
    return document.querySelectorAll('div.cn-container div.common-new').length - 1;
}

async function renderNews(result){
    result.map((obj, index) => {
        let commonNewTemplate = document.querySelector('div.common-new').cloneNode(true);
        let resultDate = new Date(obj.updated_at);
        let formatedDate = `${fixZero(resultDate.getDay())}/${fixZero(resultDate.getMonth() + 1)}/${resultDate.getFullYear()} ${fixZero(resultDate.getHours())}:${fixZero(resultDate.getMinutes())}`;

        commonNewTemplate.setAttribute('data-cn', index);
        commonNewTemplate.querySelector('div.title a').setAttribute('href', `http://localhost/blog-laravel/public/new/${obj.id}`);
        commonNewTemplate.querySelector('div.title h2').innerHTML = obj.title;
        commonNewTemplate.querySelector('div.subtitle p').innerHTML = obj.subtitle;
        commonNewTemplate.querySelector('div.author').innerHTML = `<i class="fa fa-user"></i>${obj.user.name}`;
        commonNewTemplate.querySelector('div.date').innerHTML = formatedDate;

        document.querySelector('div.container-populars main div.cn-container').append(commonNewTemplate);
    });
}

