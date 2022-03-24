/*
Script principal do site
*/


let api = 'https://ws.apicep.com/cep/59190-000.json'
fetch(api)
    .then(function(request){
        
        if(request.status == 200){
           console.log('Codigo 200'); 
        };
        // console.log(request.state);
        // console.log(request.city);
        // console.log(request);
        // console.log(request[0]);
    })
    .catch(function(){
        if(!request){
            console.log('erro');
        }
    })