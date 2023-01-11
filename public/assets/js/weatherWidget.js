var arrayWeekDays = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
var arrayMonths = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];

const c = (el) => document.querySelector(el);

const sucess = async (position) => {
    let url = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${position.coords.latitude}&lon=${position.coords.longitude}&appid=d7eeb67ef3edfc8ed69c80de3115f756&units=metric&lang=pt_br`)
    let result = await url.json();
    let now = new Date();

    c('div.weather-icon-area img').src = `http://openweathermap.org/img/wn/${result.weather[0].icon}@2x.png`;
    c('div.weather-appearence').innerHTML = result.weather[0].description;
    c('div.city-name').innerHTML = result.name;
    c('div.weather-date').innerHTML = `${arrayWeekDays[now.getDay()]}, ${fixZero(now.getDate())} de ${fixZero(arrayMonths[now.getMonth()])} ${fixZero(now.getHours())}:${fixZero(now.getMinutes())}`;
    c('div.temperature p').innerHTML = `${(result.main.temp).toFixed(0)}`;
    c('div.wind').innerHTML = `${result.wind.speed} km/h`;
}

navigator.geolocation.getCurrentPosition(sucess)



