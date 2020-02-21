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
            $sql = "UPDATE corretor SET nome='Aleister', sobrenome='Crowley' WHERE id=42";
            // Prepara a delcaração
            $stmt = $conn->prepare($sql);

            // Executa a operação
            $stmt->execute();

            // imprime uma mensagem para dizer que o registro foi atualizado com sucesso
            echo $stmt->rowCount() . " registro atualizado com sucesso";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        ?>
    </body>
</html>

