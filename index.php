<<<<<<< HEAD
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
    <p>Your name: <input type="text" name = "nome"/></p>
    <p>Your age: <input type="text" name = "idade"/></p>
    <button type="submit">click</button>
</form>
    
</body>
</html>
=======
<?php

$categorias =[];
$categorias[] = 'infatil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
print_r($categorias);

$nome = "gustavo";
$idade = 14;

//var_dump($nome)
//var_dump($idade)

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador " .$nome. " compete na categoria infantil";
    }
}
elseif($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador " .$nome. " compete na categoria adolescente";
    }
  
}
else {
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador " .$nome. " compete na categoria adulto";
        }
    
}

>>>>>>> c7939e0... comit incial
