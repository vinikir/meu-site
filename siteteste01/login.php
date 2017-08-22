<!doctype HTML>
<html>
<head>
     <title>login</title>
     <link rel="stylesheet" href="estilologin.css" type="text/css">
    <meta charset="utf-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Fredericka+the+Great');
        @import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
    </style>
    <meta http-equiv="login.php" content="no-cache"/>

</head>
<body>
<a href="index.php"><img  id="banner" src="img/baner.jpg"  width="1350px" height="185px" /></a>
<div id="menu">
    <?php
    include ("menu.php");
    ?>
</div>
<div id="redes">
    <table>
        <tr>
            <td>Siga nossas redes <br/>sociais para ver <br/> todas as nossas <br/> novidades e promoções</td>
        </tr>
    </table>
</div>
<div id="logos">
    <?php
    include ("rede.php");
    ?>
</div>
    <div id="formlogin">
        <fieldset>
           <legend>Login</legend>
            <form method="post" action="login2.php" name="formlogin" >
                 <label>Login:</label><input type="text" name="login"  ><br/>
                 <label>Senha:</label><input type="password" name="senha"><br/><br/>
                 <input type="submit" value="Fazer Login"  name="fazerlogin">
            </form>
        </fieldset>
    </div>
    <div id="formcad" >
         <fieldset>
             <legend>Cadastro</legend>
                <form method="post" action="cadastroSQL.php" name="formcad"><br/>
                    <fieldset>
                      <legend>Informações Pessoais</legend>
                        <label>Nome Completo:</label><input type="text" name="nome">
                      <label>CPF:</label><input type="text" name="cpf" >
                    <br/>
                    <label>E-mail:</label><input type="email" name="e-mail"><br/>
                    </fieldset><br/>
                        <fieldset>
                            <legend> Informações de Entrega</legend>
                                <label>Endereço</label><input type="text" name="rua">
                                <label>Numero:</label><input type="text" name="numero"><br/>
                                <label>Bairro:</label><input type="text" name="bairro">
                                <label>Cidade:</label><input type="text" name="cidade">
                                <label> CEP:</label><input type="text" name="cep">
                        </fieldset><br/>
                              <fieldset>
                                  <legend> Informações de Login</legend>
                                        <label>Login:</label><input type="text" name="cadlogin"><br/>
                                        <label>Senha:</label><input type="password" name="cadsenha"> <br/>
                                        <label>Repita Senha</label><input type="password" name="recadsenha"><br/>
                                        <br/><br/>
                                        <input type="submit" value="Cadastrar" name="cadastrar">
                              </fieldset>
                </form>
         </fieldset>
    </div>
</body>
</html>
