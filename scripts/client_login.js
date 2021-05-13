class ClientLogin{
    constructor(){
        this.tentativas = 0;
    }

    prepareSendLogin(){
        let self = this;
        self.xhr = new XMLHttpRequest();
        self.xhr.open('POST', 'login_client.php', true);
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
                else{
                    console.log(self.xhr.response);
                    let obj = self.xhr.response;
                    document.cookie = 'username='+obj.username;
                    document.cookie = 'bi='+obj.bi;
                    document.cookie = 'email='+obj.email;

                    switch(obj.type){
                        case 'al':
                            document.cookie = 'home=telaaluno.php';
                            window.location.replace('telaaluno.php');
                            break;

                        case 'enc':
                            document.cookie = 'home=encarregado_home.php';
                            window.location.replace('encarregado_home.php');
                            break;
                    }
                }
            }
        }
    }

    login(username_id, password_id){
        var username = document.getElementById(username_id).value;
        var password = document.getElementById(password_id).value;
        this.prepareSendLogin();
        this.xhr.send('email=' + username + "&password=" + password);
    }
}

login = new ClientLogin();
