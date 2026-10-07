<?php
echo "Exercicio 1 Grupo I<br>";
function retangulo($altura=5)
{
    $i=1;
    while($i<=$altura)
    {
    echo "******<br>";
    $i++;
    }
    
}
retangulo(20);
echo "Exercicio 2 Grupo I<br>";
function trocar($a,$b)
{
    echo "Antes da troca: A=$a e B=$b<br>";
    $c = $a;
    $a = $b;
    $b = $c;
    echo "Depois de trocar: A=$a e B=$b";
}
trocar(5,7);
echo "Exercio 1 - Grupo II<br>";
function inverter ($string)
{
   for($i=5; $i>=0; $i--)
    {
        echo $string[$i];
    }

}
inverter("Irchad");

echo "<br>Exercio 1 - Grupo III<br>";

$vetor = array(1,-2,3,4,5,6,7,8,9);

echo "O menor elemento é: " . min($vetor);//Imprime o menor elemento

$media = array_sum($vetor) / count($vetor);
echo "<br>A média dos elementos é: " . $media;
$somaPositivos = 0;                       //Imprime a média do vetor

foreach ($vetor as $valor) {
    if ($valor > 0) {
        $somaPositivos += $valor;
    }
}

echo "<br>O somatório dos números positivos é: $somaPositivos";//Imprime o somatório dos números positivos

$somaNegativos = 0;

foreach ($vetor as $valor) {
    if ($valor < 0) {
        $somaNegativos += $valor;
    }
}

echo "<br>O somatório dos números negativos é: $somaNegativos";

echo "<br>Exercio 2 - Grupo III<br>";// Exercicio 2 grupo III
$chave =array();
for($i=0; $i<=5; $i++)
{
      $num=rand(1,50);
      $aux=in_array($num, $chave);
      if($aux==false)
      {
          $chave[$i]=$num;
          echo "$num<br>";
      }
      else
      {
          $i--;
      }    
}

echo "<br>Exercio 3 - Grupo III<br>";// Exercicio 3 grupo III
$cavalos = array("Cavalo1" => 88, "Cavalo2" => 18, "Cavalo3" => 120, "Cavalo4" => 50, "Cavalo5" => 75);
asort($cavalos);
$a=1;
foreach($cavalos as $c=>$v)
{
    echo "$c ganhou com velocidade $v<br>";
    $a++;
    if($a==4)
    break;
}


?>