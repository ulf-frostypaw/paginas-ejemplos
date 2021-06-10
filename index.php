<?php

//Logica para abrir la pagina
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

//Frangmento de la primera parte del HTML
    require_once 'paginas/header.php';

//Ubica la pagina a solicitar. Caso contrario rediriege a la pagina 404
    @require_once 'paginas/' . $pagina . '.php';

//Ultima parte del cuerpo del HTML

    require_once 'paginas/footer.php'

?>