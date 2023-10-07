<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Forecast</title>
</head>
<body>
    <h1>Weather Panel</h1>
    <div class="container">
        <div class="weather-input">
            <h3>Enter a city name</h3>
            <input class="city-input" type="text" placeholder="E.g., Seoul, London, Dallas">
            <button class="search-btn">Search</button>
            <div class="separator"></div>
            <button class="location-btn">Use current location</button>
        </div>
        <div class="weather-data">
            <div class="current-weather">
                <div class="details">
                    <h2>London (2023.06.10)</h2>
                    <h4>Temperature: 19.10°C</h4>
                    <h4>Wind: 4.31 M/S</h4>
                    <h4>Humidity: 79%</h4>
                </div>
                <div>
                    <div class="icon">
                        <img src="https://openweathermap.org/img/wn/10d@4x.png" alt="weather-icon">
                        <h4>Moderate rain</h4>
                    </div>
                </div>
            </div>
            <div class="days-forecast">
                <h2>5-day forecast</h2>
                <ul class="weather-cards">
                    <li class="card">
                        <h2>(2023.06.10)</h2>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png" alt="weather-icon">
                        <h4>Temp: 19.10°C</h4>
                        <h4>Wind: 4.31 M/S</h4>
                        <h4>Humidity: 79%</h4>
                    </li>
                    <li class="card">
                        <h2>(2023.06.10)</h2>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png" alt="weather-icon">
                        <h4>Temp: 19.10°C</h4>
                        <h4>Wind: 4.31 M/S</h4>
                        <h4>Humidity: 79%</h4>
                    </li>
                    <li class="card">
                        <h2>(2023.06.10)</h2>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png" alt="weather-icon">
                        <h4>Temp: 19.10°C</h4>
                        <h4>Wind: 4.31 M/S</h4>
                        <h4>Humidity: 79%</h4>
                    </li>
                    <li class="card">
                        <h2>(2023.06.10)</h2>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png" alt="weather-icon">
                        <h4>Temp: 19.10°C</h4>
                        <h4>Wind: 4.31 M/S</h4>
                        <h4>Humidity: 79%</h4>
                    </li>
                    <li class="card">
                        <h2>(2023.06.10)</h2>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png" alt="weather-icon">
                        <h4>Temp: 19.10°C</h4>
                        <h4>Wind: 4.31 M/S</h4>
                        <h4>Humidity: 79%</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<script src="script.js" defer></script>
</body>
</html>