class CookieManager{
    constructor(){
        this.data = document.cookie;
    }

    isLogged(){
        document.cookie == '' ? return false : return true;
    }

    getUsername(){
        if(isLogged()){
            let cookieData = this.data.split(';');
            let username = cookieData[1].split('=')[1];
        }
    }

    getBI(){
        if(isLogged()){
            let cookieData = this.data.split(';');
            let bi = cookieData[0].split('=')[1];
        }
    }
}
