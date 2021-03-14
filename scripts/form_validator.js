
class FormSubmiter {

    constructor(){
        this.isPasswordValid = false;
    }

    /*function validadeBI(id){
        var BIField = document.getElementById(id);
        var BInumber = BIField.value;
        var
        if(true){

            if (BIField.length != 14){
                return false;
            }
        }
        return false;
    }*/

    isValidPassword(id_pass1, id_pass2){
        var pass1 = document.getElementById(id_pass1).value;
        var pass2 = document.getElementById(id_pass2).value;

        if (pass1 == pass2){
            this.isPasswordValid = true;
            return;
        }
        else{
            alert("As senhas devem ser idênticas, por favor corrija.")
            this.isPasswordValid = false;
            return;
        }
    }

    submitInsert(type, form_id){

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "reg_client.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText == 'OK'){
                    alert("cadastro feito com sucesso!");
                    var form = document.getElementById(form_id);
                    form.reset();
                }
                else{
                    alert("Ocorreu um erro, por favor verifique os dados.");
                    console.log(xhr.responseText);
                }
            }
        }

        switch(type){
            case "enc":
                this.isValidPassword('senha1', 'senha2');
                if(!this.isPasswordValid){return;}
                var bi_encarregado = document.getElementById('bi_encarregado').value;
                var nome_completo = document.getElementById('nome_completo').value;
                var morada = document.getElementById('morada').value;
                var email = document.getElementById('email').value;
                var senha = document.getElementById('senha1').value;
                var telefone = document.getElementById('telefone').value;
                var sexo = document.getElementById('sexo').value;
                var bi_coordenador = document.cookie['cBI'];

                xhr.send('bi_encarregado=' + bi_encarregado +
                    '&nome_completo=' + nome_completo +
                    '&morada=' + morada +
                    '&email=' + email +
                    '&senha=' + senha +
                    '&telefone=' + telefone +
                    '&sexo=' + sexo +
                    '&bi_coordenador=' + bi_coordenador  +
                    '&type=' + type
                );
                break;

            case "aluno":
                this.isValidPassword('senha1', 'senha2');
                if(!this.isPasswordValid){return;}
                var turma = document.getElementById('turma').value;
                var senha = document.getElementById('senha').value;
                var encarregado = document.getElementById('encarregado').value;
                var bi = document.getElementById('bi').value;
                var sexo = document.getElementById('sexo').value;
                var curso = document.getElementById('curso').value;
                var nome_completo = document.getElementById('nome_completo').value;
                var email = document.getElementById('email').value;
                var data_nascimento = document.getElementById('data_nascimento').value;
                var telefone = document.getElementById('telefone').value;
                var morada = document.getElementById('morada').value;
                var bi_coordenador = document.getElementById('bi_coordenador').value;
                var bi_encarregado = document.getElementById('bi_encarregado').value;

                xhr.send('turma=' + turma +
                    '&senha=' + senha +
                    '&encarregado=' + encarregado +
                    '&bi=' + bi +
                    '&sexo=' + sexo +
                    '&curso=' + curso +
                    '&nome_completo=' + nome_completo +
                    '&email=' + email +
                    '&data_nascimento=' + data_nascimento +
                    '&telefone=' + telefone +
                    '&morada=' + morada +
                    '&bi_coordenador=' + bi_coordenador +
                    '&bi_encarregado=' + bi_encarregado +
                    '&type=' + type
                );
                break;

            case "coord":
                break;
        }

    }
}

validator = new FormSubmiter();
