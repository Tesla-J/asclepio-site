<?php
    /* Classe Server
    Essa classe abstracta será implementada em todas as classes que irão interagir com a BD
    */
    class Server{

        protected $c;
        protected $table;

        function __construct(){

            $host = "127.0.0.1";
            $port = 3306;
            $db_name = "asclepio";
            $user = "root";
            $password = "toor";

            try{
                $this->c = new PDO(
                    "mysql:host=$host;
                    port=$port;
                    dbname=$db_name",
                    $user,
                    $password);
                $this->c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                echo $e->getMessage();
            }
        }

        //Must set it before use the followind methods
        public function setTable($table){
            $this->table = $table;
        }

        //remember: before use these methods, set the table with the method above

        public function get($attribute, $value){
            if($this->c != null){
                $q = "SELECT * FROM ". $this->table ." WHERE ". $attribute ." = :value";
                $stm = $this->c->prepare($q);
                //$stm->bindValue($id, $BI_Encarregado);
                $stm->execute(['value' => $value]);
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return json_encode($row);
            }
                return null;
        }

        public function getAll(){
            $q = "SELECT * FROM ". $this->table .";";
            $stm = $this->c->prepare($q);
            $stm->execute();
            $rows = $stm.fetchAll(PDO::FETCH_ASSOC);
            return json_encode($rows);
        }

        public function update($id_attr, $id_attr_value, $attr, $value){
            $q = "UPDATE ". $this->table ." SET ". $attr ." = :value WHERE ". $id_attr ." = :id_attr_value;";
            $stm = $this->c->prepare($q);
            $stm->execute([
                "value" => $value,
                "id_attr_value" => $id_attr_value]);
        }

        public function delete($id_attr, $id_attr_value){
            $q = "DELETE FROM ". $this->table ." WHERE ". $id_attr ." = :id_attr_value;";
            $stm = $this->c->prepare($q);
            $stm->execute([
                "id_attr_value" => $id_attr_value]);
        }
    }


    class Encarregado extends Server{

        public function addNewEncarregado($bi, $nome_completo, $morada, $email, $senha, $telefone, $sexo, $bi_coordenador){
            $q = "INSERT INTO Encarregado VALUES (
                :bi,
                :nome_completo,
                :morada,
                :email,
                :senha,
                :telefone,
                :sexo,
                :bi_coordenador)";
            $stm = $this->c->prepare($q);
            $stm->execute([
                "bi" => $bi,
                "nome_completo" => $nome_completo,
                "morada" => $morada,
                "email" => $email,
                "senha" => hash("sha512", $senha, false),
                "telefone" => $telefone,
                "sexo" => $sexo,
                "bi_coordenador" => $bi_coordenador]);
        }


    }

    class Aluno extends Server{

        public function addNewAluno($turma, $senha, $bi, $sexo, $curso, $nome_completo, $email, $data_nascimento, $telefone, $morada, $bi_coordenador, $bi_encarregado){
            $q = "INSERT INTO Aluno VALUES (
                :turma,
                :senha,
                :bi,
                :sexo,
                :curso,
                :nome_completo,
                :email,
                :data_nascimento,
                :telefone,
                :morada,
                :bi_coordenador,
                :bi_encarregado)";
            $stm = $this->c->prepare($q);
            $stm->execute([
                "turma" => $turma,
                "senha" => hash("sha512",$senha, false),
                "bi" => $bi,
                "sexo" => $sexo,
                "curso" => $curso,
                "nome_completo" => $nome_completo,
                "email" => $email,
                "data_nascimento" => $data_nascimento,
                "telefone" => $telefone,
                "morada" => $morada,
                "bi_coordenador" => $bi_coordenador,
                "bi_encarregado" => $bi_encarregado]);
        }

    }

    /* Classe Funcionário
    Responsável pelo CRUD da tabela Funcionários na BD asclepio
    Nota: a ser revisado
    */
    class Coordenador extends Server{
        public function addNewCoordenador($bi, $nome_completo, $morada, $sexo, $data_nascimento, $telefone, $email, $senha){
            $q = "INSERT INTO Coordenador VALUES (
                :bi,
                :nome_completo,
                :morada,
                :sexo,
                :data_nascimento,
                :telefone,
                :email,
                :senha)";
            $stm = $this->c->prepare($q);
            $stm->execute(
                ["bi" => $bi,
                "nome_completo" => $nome_completo,
                "data_nascimento" => $data_nascimento,
                "sexo" => $sexo,
                "email" => $email,
                "telefone" => $telefone,
                "morada" => $morada,
                "senha" => hash("sha512", $senha, false)]);
        }
}

    /* Classe Comunicado
    Responsável pelo CRUD na tabela Comunicados na BD asclepio
    */
    class Comunicado extends Server{
        public function getComunicadoById($id){
         if($this->c != null){
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

    /* Classe Boletins
    Responsável pelo CRUD na tabela Boletins na BD asclepio
    */
    class Boletins extends Server{
        public function getBoletimById($id){
            if($this->c != null){
                $q = "SELECT * FROM Boletins WHERE ID_Boletim = :id;";
                $stm = $this->c->prepare($q);
                $stm->execute(["id" => $id]);
                $row = $stm->fetch(PDO::FETCH_ASSOC);

                return $row;
            }
                return null;
        }

        public function getAllFromBoletim(){
            $q = "SELECT * FROM Boletins;";
            $stm = $this->c->query($q);
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($rows);
        }

        public function addNewBoletim($arquivo, $trimestre, $ano){
            $q = "INSERT INTO Boletins VALUES ( DEFAULT, :arquivo, :trimestre, :ano );";
            $stm = $this->c->prepare($q);
            $stm->execute(["arquivo" => $arquivo, "trimestre" => $trimestre, "ano" => $ano]);
        }

        public function setPath($id, $new_Path){
            $q = "UPDATE Boletins SET Arquivo = :new_Path WHERE ID_Boletim = :id";
            $stm = $this->c->prepare($q);
            $stm->execute(["new_Path" => $new_Path, "id" => $id]);
        }

        public function setTrimestre($id, $new_Trimestre){
            $q = "UPDATE Boletins SET Arquivo = :new_Trimestre WHERE ID_Boletim = :id";
            $stm = $this->c->prepare($q);
            $stm->execute(["new_Path" => $new_Trimestre, "id" => $id]);
        }
    }

    /* Classe BoletimManager
    Responsável por manipular as informações nas planilhas carregadas
    */
    require_once "phpspreadsheet/spreadsheet/vendor/autoload.php";
    class BoletimManager{
        //private $filename;
        private $sheet;
        private $spreadsheet;
        private $data_array;

        public function __construct($file){
            //$this->filename;
            $this->spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
            $this->sheet = $this->spreadsheet->getActiveSheet();
            $this->data_array = $this->sheet->toArray(null, true, true, true);
        }

        public function getArray(){
            return $this->data_array;
        }

        public function toTable(){
            echo '<table class="striped centered">';
        	foreach($this->data_array as $row => $columns){
        		echo '<tr>';
        		foreach($columns as $column){
                        echo '<td>' . $column . '</td> ';

        		}
        		echo '</tr>';
        	}
        	echo '</table>';
        }

        private function getNameColumn(){
            $names_column = null;
            for($row=1; $row <= $this->sheet->getHighestDataRow() ;$row++){
                $column=0;
                foreach( range('A', $this->sheet->getHighestDataColumn()) as $aux ){
                    $column++;
                    $cell = $this->sheet->getCellByColumnAndRow($column, $row);
                    if ( strstr(strtoupper($cell->getValue()), "NOME") != ""){
                        $names_column = array("row" => $row , "column" => $column);
                        return $names_column;
                    }
                }
            }
        }

        public function getAllNames(){
            $address = $this->getNameColumn();
            $row = $address["row"];
            $column = $address["column"];
            $maxColumn = $this->sheet->getHighestDataColumn();
            $columnChar = range('A',$maxColumn); //vai ajudar a obter a letra certa para criar o endereço das células

            echo "<table>";
            for(; $row <= $this->sheet->getHighestDataRow(); $row++){
                echo "<tr>";
                echo "<td>". $this->sheet->getCell($columnChar[$column] . (string) $row)->getValue() ."</td>";
                echo "</tr>";
            }
            echo "</table>";

        }

        //retorna o array com os dados das celulas em formato JSON
        public function toJSON(){
            $json = json_encode($this->data_array);
            return $json;
        }

        public function namesToJSON(){
            $address = $this->getNameColumn();
            $row = $address["row"] +1; //skips the title
            $column = $address["column"];
            $maxColumn = $this->sheet->getHighestDataColumn();
            $columnChar = range('A',$maxColumn); //vai ajudar a obter a letra certa para criar o endereço das células

            $names_array = array();

            for(; $row <= $this->sheet->getHighestDataRow(); $row++){
                $value = $this->sheet->getCell($columnChar[$column] . (string) $row)->getValue();
                array_push($names_array,$value);
            }
            return json_encode($names_array);
        }
    }

?>
