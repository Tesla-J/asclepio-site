let tentativas = 0;

let emailInput = document.getElementById("email");
let emailValidity = false;

let passwordInput = document.getElementById("password");
let passwordValidity = false;

let errorTag = document.getElementById("errorTag");


function validateEmail(){

    if(emailInput.value.length == 0){
        emailInput.setCustomValidity("Introduza o seu e-mail.");
        emailInput.reportValidity();
    }
    else if (!emailInput.checkValidity()) {
        emailInput.setCustomValidity("Introduza um e-mail válido.");
        emailInput.reportValidity();
    }
    else{
        emailInput.setCustomValidity("");
        emailValidity = true;
    }

}

function validatePassword(){

    if(passwordInput.value.length == 0){
        passwordInput.setCustomValidity("Intruduza a sua senha.");
        passwordInput.reportValidity();
    }
    else if(passwordInput.value.length < 8){
        passwordInput.setCustomValidity("A senha deve ter pelo menos 8 caracteres.");
        passwordInput.reportValidity();
    }
    else{
        passwordInput.setCustomValidity("");
        passwordValidity = true;
    }

}

function verifyResponse(response){

    if(response == "NONE"){
        errorTag.innerHTML = "Dados de acesso incorrectos!";
        ++tentativas;

        if(tentativas >= 5){
            expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + (3600 * 1000));

            document.cookie = "ACCESSIBILITY=null; expires="+expirationDate.toUTCString() + "; secure";
            tentativas = 0;
            document.location.reload();
        }
    }
    else{
        switch(response){

            case "DISABLED":
                errorTag.innerHTML = "A conta dos professores está desactivada.";
                break;

            case "Professor":
                document.location.replace("telaprofessorgeral");
                break;

            case "Administrador":
                document.location.replace("Admin");
                break;

            default:
                document.location.replace("coordenador");
        }
    }

}


function sendRequest(email, pass){

    xhr = new XMLHttpRequest();
    xhr.open("post","login_func");
    xhr.responseType = "json";
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){
        if(xhr.status == 200 && xhr.response != null)
            verifyResponse(xhr.response);
    }

    xhr.send("email="+email + "&password="+pass);
}

function submitData(){

    if(!(emailValidity && passwordValidity)){
        emailInput.reportValidity();
        passwordInput.reportValidity();
        return;
    }

    sendRequest(emailInput.value, passwordInput.value);

}
