// public/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    const airportSelect = document.getElementById('airportSelect');

    airportSelect.addEventListener('change', function () {
        const selectedAirport = this.value;
        // Implement any dynamic behavior based on selected airport
        console.log(`Selected Airport: ${selectedAirport}`);
    });
});

