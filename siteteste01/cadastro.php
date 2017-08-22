<?php
    $nome = $_POST ["nome"];
    $cpf = $_POST ["cpf"];
    $email = $_POST ["email"];
    $rua = $_POST ["rua"];
    $numero = $_POST ["numero"];
    $bairro = $_POST ["bairro"];
    $cidade = $_POST ["cidade"];
    $cep = $_POST ["cep"];
    $cadlogin = $_POST ["cadlogin"];
    $cadsenha = md5 ($_POST ["cadsenha"]);
    $recadsenha = md5($_POST ["recadsenha"]);


?>