<?php
    
    $page = @$_GET['page'];

    if(file_exists($page.'.php')){
        include($page.'.php');
    }

?>

<footer>Todos os direitos reservados.</footer>