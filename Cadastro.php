<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro</title>
        <style>
            .error {color: #FF0000;}
            input:invalid {
                border: 2px solid red;
            }
        </style>
    </head>
    <body>
        <?php
// define variables and set to empty values
        $nomeErr = $sobrenomeErr = "";
        $nome = $sobrenome = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nome"])) {
                $nomeErr = "Nome é obrigatório";
            } else {
                $nome = test_input($_POST["nome"]);

                // Checa se o nome contém apenas letras e espaço em branco
                if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
                    $nomeErr = "Digite apenas letras e espaço em branco.";
                }
            }
            if (empty($_POST["sobrenome"])) {
                $sobrenomeErr = "Sobrenome é obrigatório";
            } else {
                $sobrenome = test_input($_POST["sobrenome"]);
                // Checa se o nome contém apenas letras e espaço em branco
                if (!preg_match("/^[a-zA-Z ]*$/", $sobrenome)) {
                    $sobrenomeErr = "Digite apenas letras e espaço em branco.";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <div align="center">
            <h1 style="font-size:200%; font-family:verdana; color:#990000"><b>Cadastro</b></h1>
            <br/><br/>
            <p><span class="error">* Campos obrigatórios</span></p>
            <form action="ItgDB.php" method="POST"> <!--$_SERVER é um array contendo informações como cabeçalhos, paths, e localizações do script,
                                                                enquanto que o índice PHP_SELF, é o nome do arquivo do script que está executando,
                                                                relativa à raiz do documento. Ou seja, quando os dados são inseridos no formulário submetido,
                                                                os mesmo serão enviados à mesma página que realizou a requisição, neste caso, a página cadastro.php.-->
                Nome:<br/>
                <input type="text" data-ls-module="charCounter" maxlength="50" name="nome" placeholder="Qual seu nome?" value="<?php echo $nome; ?>" required><br/><br/>
                <span class="error">* <?php echo $nomeErr; ?></span>
                <br><br>
                Sobrenome:<br/>
                <input type="text" data-ls-module="charCounter" maxlength="50" name="sobrenome" placeholder="Qual seu sobrenome?" value="<?php echo $sobrenome; ?>" required><br/><br/>
                <span class="error">* <?php echo $sobrenomeErr; ?></span>
                <br><br>
                <button type="submit">Cadastrar</button>
            </form><br><br>
            <a href="Tabela.php">Exibir dados</a><br><br>
            <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é " . date("d.m.Y, H:i:s");
            ?> 
        </div>
    </body>
</html>