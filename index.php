<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade Avaliativa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>

        body {
            text-align: center;
        }

    </style>

</head>
<body>

    <?php

        echo "Testando...<br>";

        $valores = array(5, 2, -4, 0, 20, 3);

        foreach($valores as $num){
            echo calc($num);
        }

        function calc($num){
            //-----------------------parOUimpar--------------------------------
            if($num % 2 == 0){
                echo " $num é par,";
            }elseif($num != 0){
                echo " $num é ímpar,";
            }

            //-----------------------intOUfloat--------------------------------
            if ($num % 10 == 0){
                echo " redondo";
            }
            elseif($num != 0){
                echo " não redondo";
            }

            //---------------------------+-0-----------------------------------
            if($num > 0 ){
                echo " e Positivo.<br>";
            }if($num < 0){
                echo " e Negativo.<br>";
            }if($num == 0){
                echo " e Neutro.<br>";
            }
        } 

    ?>

</body>
</html>