/*
Script principal do site
*/

// fetch('https://ws.apicep.com/cep/59190-000.json')
//     .then(console.log('ok'))
//     .catch(console.log('erro'))

let cpf = document.getElementById('cpf');

cpf.addEventListener('change', e => {
    // let regex = new RegExp('[0-9]{11}');
    // let regex2 = new RegExp('\d{3}\.\d{3}\.\d{3}-\d{2}');
    let regex2 = new RegExp(/(\d{3})(\d{3})(\d{3})(\d{2})/);
    // if (!regex.test(cpf.value)){
    //     cpf.style.border = '2px solid red';
    // } else {
        cpf.style.border = '2px solid green';
        // maskCpf = cpf.value.replace(regex2, cpf.value);
        maskCpf = cpf.value.replace(regex2, '$1.$2.$3-$4');
        cpf.value = maskCpf;
        console.log(cpf.value);
        console.log(maskCpf);
    // }
})