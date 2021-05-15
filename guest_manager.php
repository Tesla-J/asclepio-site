<?php
    header("Content-Type: application/json");

    switch($_SERVER['REQUEST_METHOD']){
        case "GET":
            $filename = "default/prof.json";
            $file = fopen($filename, "r", ) or die("Could not read the file");
            $fileData = json_decode(fread($file, filesize($filename)), true);
            fclose($file);
            echo json_encode($fileData['enabled']);
            break;

        case "POST":
            if(isset($_POST['switch'])){
                $filename = "default/prof.json";
                $file = fopen($filename, "r", ) or die("Could not read the file");
                $fileData = json_decode(fread($file, filesize($filename)), true);
                fclose($file);

                $fileData["enabled"] = filter_var($_POST["switch"], FILTER_VALIDATE_BOOLEAN);

                $file = fopen($filename, "w", ) or die("Could not read the file");
                $count = fwrite($file, (string) json_encode($fileData));
                fclose($file);
                echo $count;
            }
            break;

        default:
            header("location: index.php");
    }
?>
