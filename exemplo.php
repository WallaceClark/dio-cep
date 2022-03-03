<?php

    require_once "vendor/autoload.php";

    use WallaceClark\DioCep\Search;

    $busca = new Search();
    $resultado = $busca->getAddressFromZipcode('01033-000');

    echo json_encode($resultado);
    //print_r($resultado);

?>