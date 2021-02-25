<?php
   
   session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Formulário para inscrição de competidores</p>

<form action="script.php" method="post">
   <?php
        $mensagemDesucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : ' ';
        if(!empty($mensagemDesucesso))
        {
            echo $mensagemDesucesso;
        }
        

        $textErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : ' ';
        if(!empty($textErro))
        {
            echo $textErro;
        }

   ?>
    <p>Your name: <input type="text" name = "nome"/></p>
    <p>Your age: <input type="text" name = "idade"/></p>
    <button type="submit">click</button>
</form>
    
</body>
</html>


