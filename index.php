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

        $valores = array(5, 2, -4, 0, 3);
        foreach($valores as $num){
            //----------------------parOUimpar-------------------------------------------
            if($num % 2 == 0){
                    echo " $num é PAR,";
                }else{
                    echo " $num é IMPAR,";
            }

            //---------------------intOUfloat---------------------------------------------
            if ($num % 10 == 0){
                    echo " redondo";
                }
                else{
                    echo " não redondo";
            }

            //------------------------------+-0-------------------------------------------
            if($num > 0 ){
                    echo " e Positivo.<br>";
                }if($num < 0){
                    echo " e Negativo.<br>";
                }if($num == 0){
                    echo "e Neutro.<br>";
                }   
        }

    ?>

</body>
</html>
