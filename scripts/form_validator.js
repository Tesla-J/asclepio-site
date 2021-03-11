
const class Form {

    var isPasswordValid = false;

    /*function validadeBI(id){
        var BIField = document.getElementById(id);
        var BInumber = BIField.getValue();
        var
        if(true){

            if (BIField.length != 14){
                return false;
            }
        }
        return false;
    }*/

    function isValidPassword(id_pass1, id_pass2){
        var pass1 = document.getElementById(id_pass1).getValue();
        var pass2 = document.getElementById(id_pass2).getValue();

        if (pass1 == padd2){
            return true;
        }
        else{
            alert("As senhas devem ser idênticas, por favor corrija.")
            return false;
        }
    }

    function submitInsert(type, form){

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "reg_client.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText == 'OK'){
                    alert("cadastro feito com sucesso!");
                    var form = document.getElementById(form);
                    form.reset();
                }
            }
        }

        switch(type){
            case "enc":
                var bi_encarregado = ducument.getElementById('bi_encarregado').getValue();
                var nome_completo = document.getElementById('nome_completo').getValue();
                var morada = document.getElementById('morada').getValue();
                var email = document.getElementById('email').getValue();
                var senha = document.getElementById('senha').getValue();
                var telefone = document.getElementById('telefone').getValue();
                var sexo = document.getElementById('sexo').getValue();
                var bi_coordenador = document.getElementById('bi_coordenador').getValue();

                xhr.send()
                break;

            case "aluno":
                var turma = document.getElementById('turma').getValue();
                var senha = document.getElementById('senha').getValue();
                var encarregado = document.getElementById('encarregado').getValue();
                var bi = document.getElementById('bi').getValue();
                var sexo = document.getElementById('sexo').getValue();
                var curso = document.getElementById('curso').getValue();
                var nome_completo = document.getElementById('nome_completo').getValue();
                var email = document.getElementById('email').getValue();
                var data_nascimento = document.getElementById('data_nascimento').getValue();
                var telefone = document.getElementById('telefone').getValue();
                var morada = document.getElementById('morada').getValue();
                var bi_coordenador = document.getElementById('bi_coordenador').getValue();
                var bi_encarregado = document.getElementById('bi_encarregado').getValue();


                break;

            case "coord":
                break;
        }

    }
}
