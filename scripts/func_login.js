class FuncLogin{
    constructor(){
        this.tentativas = 0;
    }

    sendLogin(){
        let self = this;
        self.xhr = new XMLHttpRequest();
        self.xhr.open('POST', 'login_func.php', true);
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
