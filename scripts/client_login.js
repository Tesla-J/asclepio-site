class ClientLogin{
    constructor(){
        this.tentativas = 0;
    }

    prepareSendLogin(){
        let self = this;
        self.xhr = new XMLHttpRequest();
        self.xhr.open('POST', 'login_client.php', true);
        self.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        self.xhr.onreadystatechange = function() {
            if(self.xhr.readyState == 4 && self.xhr.status == 200){
                if(self.xhr.responseText == '"NONE"'){
                    alert('Usuário ou senha incorrectos.');
                    ++self.tentativas;
                }
                else{
                    console.log(self.xhr.responseText);
                    let obj = JSON.parse(self.xhr.responseText);
                    document.cookie = 'username='+obj.username;
                    document.cookie = 'bi='+obj.bi;

                    switch(obj.type){
                        case 'al':
                            window.location.replace('telaaluno.html');
                            break;

                        case 'enc':
                            window.location.replace('encarregado_home.html');
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