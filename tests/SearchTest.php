<?php

    use PHPUnit\Framework\TestCase;
    use WallaceClark\DioCep\Search;

    class SearchTest extends TestCase 
    {
        public function testGetAddressFromZipcodeDefaultUsage()
        {
            $resultado = new Search;
            $resultado = $resultado->getAddressFromZipcode('01033000');

            $esperado = [
                "cep" => "01033-000",
                "logradouro" => "Avenida Cásper Líbero",
                "complemento" => "lado par",
                "bairro" => "Centro",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "ibge" => "3550308",
                "gia" => "1004",
                "ddd" => "11",
                "siafi" => "7107"
            ];

            $this->assertEquals($esperado, $resultado);
        }

    }

?>