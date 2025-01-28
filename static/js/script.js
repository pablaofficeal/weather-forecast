async function getWeather() {
    try {
      const response = await fetch('/api/weather');
      const data = await response.json();
      if (data.error) {
        document.getElementById('weather').innerText = data.error;
      } else {
        document.getElementById('weather').innerHTML = `
          <h2>${data.city}</h2>
          <p>Температура: ${data.temperature}°C</p>
          <p>Описание: ${data.description}</p>
        `;
      }
    } catch (error) {
      document.getElementById('weather').innerText = "Ошибка: " + error.message;
    }
  }