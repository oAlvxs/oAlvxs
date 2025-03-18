<?php
$n1 = $_POST["cxn1"];
$n2 = $_POST["cxn2"];
$n3 = $_POST["cxn3"];

    echo "Numero 1: " . $n1 . "<br/>";
    echo "Numero 2: " . $n2 . "<br/>";
    echo "Numero 3: " . $n3 . "<br/>";
    if($n1 > $n2 && $n1 > $n3){
        echo "Número 1 é o número maior: " . $n1;
    }elseif($n2 > $n1 && $n2 > $n3){
        echo "N2 é o maior número: " . $n2;
    }elseif($n3 > $n1 && $n3 > $n2){
        echo "N3 é o maior número: " . $n3;
    }else{
        echo "Valores Iguais";
    }


?>