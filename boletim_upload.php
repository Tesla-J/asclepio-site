c<!DOCTYPE html>
<html lang=pt-BR dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Upload do Boletim</title>
    </head>
    <body>

        <?php
            if(!isset($_COOKIE['username'])){
                header('location: index.php');
            }
        ?>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="pauta"/>
            <input type="submit" placeholder="Upload"/>
        </form>
    </body>
</html>
