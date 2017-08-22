

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
	<title>autenticando usuario</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='index.php'",5000);

		}

		function loginfailed (){
			setTimeout("window.location='login.php'",5000);
		}
	</script>
</head>
<body>


<?php
    
    $l = $_POST ['login'];
    $s = $_POST ['senha'];
    $sql = mysql_query ("SELECT * FROM usuarios WHERE login = '$l' and senha = '$s' ") or die (mysql_error());
    $row = mysql_num_rows($sql);
    	if ($row > 0) {
    		session_start();
    		$_seession  ['login']= $_POST['login'];
    		$_seession  ['senha']= $_POST['senha'];
    		echo "<center>logando</center>";
    		echo "<script>loginsuccessfully() </script>";



    	}else{

    		echo "<center> nome de usuario ou senha incorreto </center>";
    		echo "<sprit>loginfailed()</script>";



    	}

?>

</body>
</html>