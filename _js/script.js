/*
Script principal do site
*/

fetch('https://ws.apicep.com/cep/59190-000.json')
    .then(console.log('ok'))
    .catch(console.log('erro'))