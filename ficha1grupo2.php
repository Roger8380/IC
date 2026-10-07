<?php
echo "Exercicio 3 - Grupo 2<br>";
echo "Tabuada do 4<br>";
$numero=4;
for($i=1;$i<=10;$i++)
    {
        $resultado=$numero*$i;
        echo "$numero x $i = $resultado<br>";
    }   
 
echo "Exercicio 4 - Grupo 2<br>"; 
echo "Soma dos números naturais de 1 a 5<br>";   
$n=5;
$s=0;
for($i=1;$i<=$n;$i++)
    {
        $s = $s + $i;
        
    }
echo "A Soma dos números naturais de 1 a $n é: $s<br>";
?>