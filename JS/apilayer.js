var myHeaders = new Headers();
myHeaders.append("apikey", "87rKhrpaIrR1329FlME9Wc64JzwVp28w");

var requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};

fetch("https://api.apilayer.com/exchangerates_data/convert?to=USD&from=IDR&amount=100", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));