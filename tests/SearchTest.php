<?php

    use PHPUnit\Framework\TestCase;
    use WallaceClark\DioCep\Search;

    class SearchTest extends TestCase 
    {
        /**
         * @dataProvider dadosTeste
         */
        public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
        {
            $resultado = new Search;
            $resultado = $resultado->getAddressFromZipcode($input);

            $this->assertEquals($esperado, $resultado);
        }

        public function dadosTeste()
        {
            return [
                "Endereço Praça da Sé" => [
                    "01001000",
                    [
                        "cep" => "01001-000",
                        "logradouro" => "Praça da Sé",
                        "complemento" => "lado ímpar",
                        "bairro" => "Sé",
                        "localidade" => "São Paulo",
                        "uf" => "SP",
                        "ibge" => "3550308",
                        "gia" => "1004",
                        "ddd" => "11",
                        "siafi" => "7107"
                    ]
                ],
                "Endereço Cásper Líbero" => [
                    "01033000",
                    [
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
                    ]
                ]
            ];
        }

    }

?>