class FuncLogin{
    constructor(){
        this.tentativas = 0;
    }

    sendLogin(){
        let self = this;
        self.xhr = new XMLHttpRequest();
        self.xhr.open('POST', 'login_func.php', true);
        self.xhr.responseType = "json";
        self.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        self.xhr.onreadystatechange = function() {
            if(self.xhr.readyState == 4 && self.xhr.status == 200){
                if(self.xhr.response == "NONE"){
                    alert('Usuário ou senha incorrectos.');
                    ++self.tentativas;

                    if(self.tentativas >= 5){
                        self.tentativas = 0;
                        let expirationDate =  new Date();
                        expirationDate.setTime( expirationDate.getTime() + (3600000))
                        document.cookie = "block=true; expires=" + expirationDate.toUTCString();
                        alert("Ocorreram várias tentativas, tente daqui a uma hora");
                        document.location.reload();
                    }
                }
                else if(self.xhr.response == "DISABLED"){
                    alert("A conta pública se encontra desabilitada.")
                }
                else{
                    console.log(self.xhr.response);
                    let obj = self.xhr.response;
                    document.cookie = 'username='+obj.username;
                    try{
                        document.cookie = 'email='+obj.email;
                        document.cookie = 'bi='+obj.bi;
                    }
                    catch(e){}

                    switch(obj.username){
                        case 'Administrador':
                            document.cookie = 'home=Admin.php';
                            window.location.replace('Admin.php');
                            break;
                        case 'Professor':
                            document.cookie = 'home=telaprofessorgeral.php';
                            window.location.replace('telaprofessorgeral.php');
                            break;
                        default:
                            document.cookie = 'home=coordenador.php';
                            window.location.replace('coordenador.php');
                    }
                }
            }
        }
    }

    login(username_id, password_id){
        var username = document.getElementById(username_id).value;
        var password = document.getElementById(password_id).value;
        this.sendLogin();
        this.xhr.send('user=' + username + "&password=" + password);
    }
}
