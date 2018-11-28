$(document).ready(() => {
    $('#signUpCPF').mask('000.000.000-00',{reverse: true});
    $('#signUpBirthDate').mask('00/00/0000',{reverse: true})
});

const checkarValores = campos => {
    return campos.every(campo => $(campo).value !== "");
}

$('#loginForm').on('submit', e => {
    let campos =  ['#signUpName',"#signUpEmail",'#signUpCPF','#signUpPassword',"#signUpBirthDate",""]
    if(!checkarValores(campos)){
        e.preventDefault()
    } 
});

$("#signUpForm").on('submit', e => {
    let campos = ["#loginEmail","#loginPassword"];
    if(!checkarValores(campos)){
        e.preventDefault();
    }
})
