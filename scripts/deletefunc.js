class Delete{
    delete(id){

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "deletefunc.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText == ''){
                    alert("Conta eliminada com sucesso!");
                    location.replace('funciconsulta.php');
                }
                else{
                    alert("Ocorreu um erro, Não foi possível concluir a acção.");
                    console.log(xhr.responseText);
                    history.back();
                }
            }

        }
        xhr.send('BI_Coordenador=' + id);

    }
}

deleter = new Delete();
