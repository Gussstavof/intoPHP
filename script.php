<?php
$categoria =array('infantil', 'adolescente', 'adulto');

error_reporting(0);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo'O nome deve conter mais de 3 caracteres!';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso!';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um número para idade!';
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'infantil')
        echo "O nadador ".$nome." compete na categoria " .$categoria[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adolescente')
        echo "O nadador ".$nome." compete na categoria " .$categoria[$i];
    }
}
else 
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adulto')
        echo "O nadador ".$nome." compete na categoria " .$categoria[$i];
    }
}


