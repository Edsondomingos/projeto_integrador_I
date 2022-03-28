/*
Script principal do site
*/

//https://ws.apicep.com/cep/06233-030.json

/* mensagen rapidas*/
let msg = document.getElementById('msg');
if(msg){
  function sumir(){
    msg.style.display = 'none';
    }

    setTimeout(sumir, 2000);  
}

/* Mudar foto perfil apos escolher */
let form = document.getElementById('form');
let fotoPerfil = document.getElementById('fotoPerfil');
let mdfoto = document.getElementById('mdfoto');


if(fotoPerfil){
    fotoPerfil.addEventListener('change', e => {        
        mdfoto.click();
        // location.reload();
    })
}
