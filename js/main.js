$(document).ready(() => {
    $('#signUpCPF').mask('000.000.000-00',{reverse: true});
});

const checkarValores = campos => {
    return campos.every(campo => $(campo).value !== "");
}

$('#login-button').on('submit',(e) => {
    let campos =  ['#signUpName',"#signUpEmail",'#signUpCPF','#signUpPassword']
    if(!checkarValores(campos)){
        event.preventDefault()
    } 
});

$("#si")
