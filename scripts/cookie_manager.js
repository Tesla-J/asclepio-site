class CookieManager{
    constructor(){
        this.data = document.cookie;
    }

    isLogged(){
        let asw = null;
        document.cookie == '' ? asw=false : asw=true;
        return asw;
    }

    getUsername(){
        if(this.isLogged()){
            let cookieData = this.data.split(';');
            let username = cookieData[0].split('=')[1];
            return username;
        }
    }

    getBI(){
        if(this.isLogged()){
            let cookieData = this.data.split(';');
            let bi = cookieData[1].split('=')[1];
            return bi;
        }
    }
}

cookieManager = new CookieManager();
