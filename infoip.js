fetch('https://ipinfo.io/json?token=YOUR_TOKEN')
  .then(response => response.json())
  .then(data => {
    console.log('IP:', data.ip);
    console.log('City:', data.city);
    console.log('Region:', data.region);
    console.log('Country:', data.country);
    console.log('Location:', data.loc);
  });
