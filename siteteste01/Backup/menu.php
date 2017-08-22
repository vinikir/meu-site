<!doctyp html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilohome.css"/>
    <title></title>
    <meta charset="utf-8"/>
</head>
<body>
<?php
    $menu_index ="<a href='index.php'>Home</a>";
    $menu_produtos = "<a href='#'>Produtos</a>";
    $submenu_cammas = "<a href='#'>Camisas Masculinas</a>";
    $submenu_blusmas = "<a href='#'>Blusa Masculina</a> ";
    $menu_contato = "<a href='#'>Contato</a>";
    $menu_sobrenos = "<a href='#'>Sobre Nos</a>";

    $mostra_menu = "<div id='menu' >
        <ul>
        <li>$menu_index</li>
        <li>$menu_produtos
            <ul>
                <li>$submenu_cammas</li>
                <li>$submenu_blusmas</li>
            </ul>    
        </li>
        <li>$menu_contato</li>   
        <li>$menu_sobrenos</li>
        </ul>
        </div>";
            
            print $mostra_menu;
 ?>
</body>
</html>
