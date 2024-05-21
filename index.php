<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade Avaliativa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

    <?php

        //Valores
        $semanas = array(5, 2 -4, 0, 3);

        function valores(){

            //----------------------parOUimpar---------------------------------------------
            if($num % 2 == 0){
                echo "O número informado é PAR";
                echo "<br>DIGITE UM NOVO NÚMERO!";
            }else{
                echo "O número informado é IMPAR";
                echo "<br>DIGITE UM NOVO NÚMERO!";
            }
            

            //---------------------intOUfloat------------------------------------------------
            if ($numero % 10 == 0){
                echo "Número redondo";
            }
            else{
                echo "Número não redondo";
            }


            //------------------------------+-0---------------------------------------------
            $num = $_POST["num"];

            if($num > 0 ){
                echo "O número informado é Positivo";
            }if($num < 0){
                echo "O número informado é Negativo";
            }if($num == 0){
                echo "O número é Neutro";
            }
        }

        
        //Execução da Função
        valores($n1, $n2, $n3, $n4, $n5);



        /*numeros = [5, 2, -4, 0, 3]
        O número 5 é impar positivo
        O número 2 é par positivo.
        O número -4 é par negativo.
        O número zero é neutro.
        O número 3 é impar positivo.*/
        
    ?>

</body>
</html>