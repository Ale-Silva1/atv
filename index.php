<?php
    // Grupo 1: Alessandro Souza, Gian Gabriel e Randal Silva
    $p = 0.0;
    $d = 0.0;
    $tE = "";
    $frete = 0.0;

    function calculaFreteEntrega($p, $d, $tE){

        // Solicitar ao usuário o peso, a distância e o tipo do envio
        if($p <= 0 || $p > 50 || $d <= 0 || $d > 2000){
            echo "O peso deve estar entre 0 a 50 kg e a distância deve estar entre 0 a 2000 Km..";
            return "erro";
        }

        $tipos = [
            "expresso" => 2.5,
            "normal" => 1.5,
            "economico" => 1.0
        ];

        if(!array_key_exists($tE, $tipos)){
            return "erro";
        }
            
        $vBase = $p * $d * 0.01;

        $vCalculado = $vBase * $tipos[$tE];

        if($vCalculado < 15.00){
            $vCalculado = 15.00;
        }
        return number_format($vCalculado, 2, '.', '');
    }
    // echo "Peso 5, Dist 100, normal: ". calculaFreteEntrega(5, 100, "normal") . "\n";
    // echo "Peso 10 Dist 200 expresso: ". calculaFreteEntrega(10, 200, "expresso") . "\n";
    // echo "Peso 0, Dist 100, normal: ". calculaFreteEntrega(0, 100, "normal") . "\n";
    // echo "Peso 10, Dist 100, vip: ". calculaFreteEntrega(10, 100, "vip");
?>