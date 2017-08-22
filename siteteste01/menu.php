<html>
<head>


</head>
<body>
    <?php
    $menu_index ="<a href='index.php'>Home</a>";
    $menu_produtos = "<a href='#'>Produtos</a>";
    $submenu_cammas = "<a href='#'> Masculinas</a>";
    $submenu_blusmas = "<a href='#'> Feminina</a> ";
    $menu_contato = "<a href='#'>Contato</a>";
    $menu_sobrenos = "<a href='#'>Sobre Nos</a>";
    $menu_login = "<a href='login.php'>Login</a>";
    $menu_logado = "<a>Logado</a>";
    $logado = 0;
    
    if ($logado == 1){

    $mostra_menu = "
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
        <li>$menu_logado</li>
        </ul>
        ";
            
            print $mostra_menu;
}
            else{
$mostra_menu = "
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
        <li>$menu_login</>
        </ul>
        ";
            
            print $mostra_menu;


}
 ?>
</body>
</html>
