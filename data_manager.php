<?php
    /* Classe Server
    Essa classe abstracta será implementada em todas as classes que irão interagir com a BD*/
    class Server{
        protected $c;
        function __construct($host, $user, $password, $db_name, $port){
            try{
                $this->$c = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $user, $password);
                $this->$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

            $row = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }

        public function getAllFromSala(){
            $q = "SELECT * FROM Sala";
            $stm = $this->c->execute($q);
            $row = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }
    }

    class Encarregado extends Server{
        public function getEncarregadoById($id){
                   if($this->$c != null){
                $q = "SELECT * FROM Encarregado WHERE BI_Encarregado = ?;";
                $stm = $this->c->prepare($q);
                $stm->bindValue($id, $BI_Encarregado);
                $stm->execute();
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
        }

        public function getAllFromEncarregado(){

        }
    }

    class Aluno extends Server{
        public function getAlunoById($id){
           if($this->$c != null){
                $q = "SELECT * FROM Aluno WHERE BI = ?;";
                $stm = $this->c->prepare($q);
                $stm->bindValue($id, $BI);
                $stm->execute();
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
        }

        public function getAllFromAluno(){

        }
    }

    /* Classe Funcionário
    Responsável pelo CRUD da tabela Funcionários na BD asclepio
    */
    class Funcionario extends Server{
        public function getFuncionarioById($id){
            if($this->$c != null){
                $q = "SELECT * FROM Funcionarios WHERE BI = ?;";
                $stm = $this->c->prepare($q);
                $stm->bindValue($id, $BI);
                $stm->execute();
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
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
            $stm = $this->$c->prepare($q);
            $stm->execute(["bi" => $bi, "nome_completo" => $nome_completo, "data_nascimento" => $data_nascimento, "sexo" => $sexo, "email" => $email, "telefone" => $telefone, "morada" => $morada, "funcao" => $funcao, "senha" => hash("sha512", $senha, false)]);
        }

        public function setNome($id, $new_Nome){
            $q = "UPDATE Funcionarios SET Nome_Completo = :new_Nome WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Nome" => $new_Nome, "id" => $id]);// baseasse aqui será sexo,e new_Sexo;
        }

         public function setSexo($id, $new_Sexo){
            $q = "UPDATE Funcionarios SET Sexo = :new_Sexo WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Sexo" => $new_Sexo, "id" => $id]);
        }

          public function setData_nascimento($id, $new_Data_nascimento){
            $q = "UPDATE Funcionarios SET Data_nascimento = :new_Data_nascimento WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Data_nascimento" => $new_Data_nascimento, "id" => $id]);
        }

         public function setEmail($id, $new_Email){
            $q = "UPDATE Funcionarios SET Email = :new_Email WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Email" => $new_Email, "id" => $id]);
        }
        public function setTelefone($id, $new_Telefone){
            $q = "UPDATE Funcionarios SET Telefone = :new_Telefone WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Telefone" => $new_Telefone, "id" => $id]);
        }

        public function setFuncao($id, $new_Funcao){
            $q = "UPDATE Funcionarios SET Funcao = :new_Funcao WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Funcao" => $new_Funcao, "id" => $id]);
        }

        public function setSenha($id, $new_Senha){
            $q = "UPDATE Funcionarios SET Senha = :new_Senha WHERE BI = :id";
            $stm = $this->$c->prepare($q);
            $tm->execute(["new_Senha" => $new_Senha, "id" => $id]);
        }
}

    /* Classe Comunicado
    Responsável pelo CRUD na tabela Comunicados na BD asclepio
    */
    class Comunicado extends Server{
        public function getComunicadoById($id){
         if($this->$c != null){
                $q = "SELECT * FROM Comunicado WHERE ID_comunicado = ?;";
                $stm = $this->c->prepare($q);
                $stm->bindValue($id, $ID_comunicado);
                $stm->execute();
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
        }

        public function getAllFromComunidado(){

        }
    }

    class Boletins extends Server{
        public function getBoletimById($id){
                     if($this->$c != null){
                $q = "SELECT * FROM Boletins WHERE ID_Boletim = ?;";
                $stm = $this->$c->prepare($q);
                $stm->bindValue($id, $ID_Boletim);
                $stm->execute();
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
        }

        public function getAllFromBoletim(){
            $q = "SELECT * FROM Boletins;";
            $stm = $this->$c->execute($q);
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
    }

?>
