const cityInput = document.querySelector('.city-input');
const searchButton = document.querySelector('.search-btn');

const API_KEY = 'c9b92cb5f646b428dfe0ec4e811e14f7'; //Free API key from OpenWeatherMap

const getCityCoordinates = () => {
    const cityName = cityInput.value.trim(); //Get user entered city name and remove extra spaces
    if (!cityName) return; //Return if city name is empty
    const GEOCODING_API_URL = 'http://api.openweathermap.org/geo/1.0/direct?q=${cityName}&limit=1&appid=${API_KEY}';

    fetch(GEOCODING_API_URL).then(res => res.json()).then(data => {
        console.log(data)
    }).catch(() => {
        alert('An error occurred while fetching coordinates');
    });
}
searchButton.addEventListener('click', getCityCoordinates);





