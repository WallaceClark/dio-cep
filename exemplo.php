<?php

    require_once "vendor/autoload.php";

    use WallaceClark\DioCep\Search;

    $busca = new Search();
    $resultado = $busca->getAddressFromZipcode('01033-000');

    print_r($resultado);

?>