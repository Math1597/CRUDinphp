<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Bem vindo</title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";


        try {
            $conn = new PDO("mysql:host=$servername;dbname=creci", $username, $password);
            // confirgura o tratamento de exceção do pdo
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to delete a record
            $sql = "DELETE FROM corretor WHERE id=38";


            // use exec() because no results are returned
            $conn->exec($sql);

            echo "Registro deletado com suceso!";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        ?>
    </body>
</html>

