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
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=creci", $username, $password);
            // confirgura o tratamento de exceção do pdo
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO corretor (nome, sobrenome)"
                    . "VALUES ('$nome','$sobrenome')";
            $conn->exec($sql);
            $last_id = $conn->lastInsertId();
            date_default_timezone_set("America/Sao_Paulo");
            echo "Dados cadastrados com sucesso. Último registro inserido foi o " . $last_id, ", em " . date('d.m.Y, H:i:s');
        } catch (PDOException $e) {
            // reverte a transação se algo der errado
            $conn->rollback();
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        ?>
    </body>
</html>

