
var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    cKey: 'NmJMVTZqUkVEZ2k1Qmh0OFp3YW9IVENkNWJqc2NlaGhGSkc4S3haOA==' // Replace with your API key
    //cKey: 'YOUR_API_KEY_HERE'  Replace with your API key
};

var countrySelect = document.querySelector('#country');
var stateSelect = document.querySelector('#state');
var citySelect = document.querySelector('#city');

function loadCountrys() {
    fetch(config.cUrl, { headers: { "X-CSCAPI-KEY": config.cKey } })
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.iso2;
                option.textContent = country.name;
                countrySelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error('Error loading countries:', error);
            alert('Failed to load countries. Please try again later.');
        });

    stateSelect.disabled = true;
    citySelect.disabled = true;
    stateSelect.style.pointerEvents = 'none';
    citySelect.style.pointerEvents = 'none';
}

function loadStates() {
    stateSelect.disabled = false;
    citySelect.disabled = true;
    stateSelect.style.pointerEvents = 'auto';
    citySelect.style.pointerEvents = 'none';

    const selectedCountryCode = countrySelect.value;
    stateSelect.innerHTML = '<option value="">Select state</option>'; // Clear states
    citySelect.innerHTML = '<option value="">Select city</option>'; // Clear cities

    fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.cKey } })
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            if (data.length === 0) {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'No states available';
                stateSelect.appendChild(option);
            } else {
                data.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state.iso2;
                    option.textContent = state.name;
                    stateSelect.appendChild(option);
                });
            }
        })
        .catch(error => {
            console.error('Error loading states:', error);
            alert('Failed to load states. Please try again later.');
        });
}

function loadCity() {
    citySelect.disabled = false;
    citySelect.style.pointerEvents = 'auto';

    const selectedCountryCode = countrySelect.value;
    const selectedStateCode = stateSelect.value;
    citySelect.innerHTML = '<option value="">Select city</option>'; // Clear cities
    
    fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, { headers: 
        { "X-CSCAPI-KEY": config.cKey } })
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            if (data.length === 0) {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'No cities available';
                citySelect.appendChild(option);
            } else {
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.name;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            }
        })
        .catch(error => {
            console.error('Error loading cities:', error);
            alert('Failed to load cities. Please try again later.');
        });
}

countrySelect.addEventListener('change', loadStates);
stateSelect.addEventListener('change', loadCity);

window.onload = loadCountrys;
