<?php

    require_once "vendor/autoload.php";

    use WallaceClark\DioCep\Search;

    $busca = new Search();
    $resultado = $busca->getAddressFromZipcode('04318-000');

    print_r($resultado);

?>