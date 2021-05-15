function getStatus(){
    let status = null;
    let xhr = new XMLHttpRequest();
    xhr.open("get", "guest_manager.php");
    xhr.responseType = "json";
    xhr.onreadystatechange = function(){
        if(xhr.status == 200 && xhr.response != null){
            status = xhr.response;
            let e = document.getElementById("switch");
            e.checked = (status == "true");
        }
    }
    xhr.send();

}

function putStatus(){
    let status = document.getElementById("switch").checked;

    let xhr = new XMLHttpRequest();
    xhr.open("post", "guest_manager.php");
    xhr.setRequestHeader("Content-Type", "x-www-form-urlencoded");
    xhr.send("switch="+!status);

}
