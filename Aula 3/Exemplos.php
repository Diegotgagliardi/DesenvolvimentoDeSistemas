<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 IF</title>
</head>
<body>
<form action="" method="GET">   
    <label> Digite o ano: </label>
    <input name="ano" type="text">

    <button type="submit">Enviar</button>
</form>
    <?php
        
        $ano = $_GET['ano'];
        $idade = 2024 - $ano;
        echo "<p>Ano: {$ano} - Idade: {$idade}</p>";

        // $var1 = 8;
        // $var2 = "8";

        // $var === $var2;

        if($idade >= 18){
            echo "<p>Legal, vc pode dirigir e votar</p>";
        }
        else if ($idade >= 16){
                echo "<p>Vc pode votar mas não dirigir</p>";
        } else {
            echo "<p>Não pode dirigir NEM vota";
        }
    ?>
</body>
</html>