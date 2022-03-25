/*
Script principal do site
*/

//https://ws.apicep.com/cep/06233-030.json

let cpf = document.getElementById('cpf');

cpf.addEventListener('change', e => {
    if(e.value.length < 14){
        // cpf.value = "";
        console.log(e);
        cpf.style.border ='3px solid green';
    }
})
