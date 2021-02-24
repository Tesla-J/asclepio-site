<?php
    /* Classe Server
    Essa classe abstracta será implementada em todas as classes que irão interagir com a BD*/
    abstract class Server{
        private $c;
        function __construct($host, $user, $password, $db_name, $port){
            try{
                $c = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $user, $password);
                $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->$c = $c;
            }
            catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }

/* Classes com métodos para interagir com cada entidade*/
    class Sala extends Server{
        public function getSalaById($id){
            $q = "SELECT * FROM Sala WHERE Numero_Sala = :id;";
            $stm = $this->c->prepare($q);
            $stm->bindParam(":id", $id, PDO::PARAM_INT);
            $stm->execute(['id'=>$id]);

            $row = $stm->fetchAll(PDO:FETCH_ASSOC);
            return $row;
        }

        public function getAllFromSala(){
            $q = "SELECT * FROM Sala";
            $stm = $this->c->execute($q);
            $row = $stm->fetchAll(PDO:FETCH_ASSOC);
            return $row;
        }
    }

    class Encarregado extends Server{
        public function getEncarregadoById($id){

        }

        public function getAllFromEncarregado(){

        }
    }

    class Aluno extends Server{
        public function getAlunoById($id){

        }

        public function getAllFromAluno(){

        }
    }

    class Funcionario extends Server{
        public function getFuncionarioById($id){
            $q = "SELECT * FROM Funcionarios WHERE BI = ?;";
            $stm = $this->c->prepare($q);
            $stm->bindValue($id, $BI);
            $stm->execute();
            $row = $stm->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        public function getAllFromFuncionario(){
            $q = "SELECT * FROM Funcionarios;";
            $stm = $this->c->execute($q);
            $rows = $stm.fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }

        public function setBI($id, $new_BI){
            $q = "UPDATE Funcionarios SET BI = :new_BI WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $stm->execute(["new_BI" => $new_BI, "id" => $id]);
        }

        public function addNewFuncionario($bi, $nome_completo, $data_nascimento, $sexo, $email, $telefone, $morada, $funcao, $senha){
            $q = "INSERT INTO Funcionarios VALUES ( :bi, :nome_completo, :data_nascimento, :sexo, :email, :telefone, :morada, :funcao, :senha)";
            $stm = $this->c->prepare($q);
            $stm->execute(["bi" => $bi, "nome_completo" => $nome_completo, "data_nascimento" => $data_nascimento, "sexo" => $sexo, "email" => $email, "telefone" => $telefone, "morada" => $morada, "funcao" => $funcao, "senha" => hash("sha512", $senha, false)]);
        }

        public function setNome($id, $new_Nome){
            $q = "UPDATE Funcionarios SET Nome_Completo = :new_Nome WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Nome" => $new_Nome, "id" => $id]);
        }
    }

    class Comunicado extends Server{
        public function getComunicadoById($id){

        }

        public function getAllFromComunidado(){

        }
    }

    class Boletim extends Server{
        public function getBoletimById($id){

        }

        public function getAllFromBoletim(){

        }
    }

?>
