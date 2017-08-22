<!doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
</head>
<body>
<?php
   $imagem = array ();
    $imagem[1] = "<a href='#'><img src='img/1.jpg'></a>";
    $imagem[2] = "<a href='#'><img src='img/2.jpg'></a>";
    $imagem[3] = "<a href='#'><img src='img/3.jpg'></a>";
    $imagem[4] = "<a href='#'><img src='img/4.jpg'></a>";
    $imagem[5] = "<a href='#'><img src='img/5.jpg'></a>";
    $imagem[6] = "<a href='#'><img src='img/6.jpg'></a>";
    $imagem[7] = "<a href='#'><img src='img/7.jpg'></a>";
    $imagem[8] = "<a href='#'><img src='img/8.jpg'></a>";
    $contador = count($imagem);
    $aleatorio1 = rand(1,$contador);
    $aleatorio2 = rand(1,$contador);
    $aleatorio3 = rand(1,$contador);
    $aleatorio4 = rand(1,$contador);
    $aleatorio5 = rand(1,$contador);
    $aleatorio6 = rand(1,$contador);
    $aleatorio7 = rand(1,$contador);
    $aleatorio8 = rand(1,$contador);


    $mostra_camisas = "
            <table>
                <tr>   
                    <td>$imagem[$aleatorio1]</td>
                    <td>$imagem[$aleatorio2]</td>
                    <td>$imagem[$aleatorio3]</td>
                    <td>$imagem[$aleatorio4]</td>
                 </tr>
                 <tr>
                    <td>$imagem[$aleatorio5]</td>
                    <td>$imagem[$aleatorio6]</td>
                    <td>$imagem[$aleatorio7]</td>
                    <td>$imagem[$aleatorio8]</td>

                 </table>";


            print $mostra_camisas;
?>
</body>
</html>
