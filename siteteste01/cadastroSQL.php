
<?php

    $banco = "id751126_vinikir";
    $usuario ="vinikir";
    $senha = "kiritschenco";
    $hostname ="localhost:3306";
    $con = mysql_connect ($hostname,$usuario,$senha) or die (mysql_error());
    mysql_select_db($banco,$con) or die (mysql_error());

 ?>

<html>
<head>
	<title>cadastro usuario</title>
</head>
<body>
 <?php
 $nome =$_POST ['nome'];
 $cpf = $_POST ['cpf'];
 $e_mail = $_POST ['e-mail'];
 $end = $_POST ['rua'];
 $numero = $_POST ['numero'];
 $bairro = $_POST ['bairro'];
 $cidade = $_POST ['cidade'];
 $cep = $_POST ['cep'];
 $l = $_POST ['cadlogin'];
 $s = $_POST ['cadsenha'];
 $rs = $_POST['recadsenha'];
 
 if ($s == $rs){
 
 mysql_query("INSERT INTO usuarios VALUES ('default','$nome','$cpf','$e_mail','$end','$numero','$bairro','$cidade','$cep','$l','$s')") or die (mysql_error());
 	echo"gravado";
$logado = 1;
}

else{

	echo "erro";
}







?>
</body>
</html>