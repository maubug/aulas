<?php



//$listaDeAlunos = array(0 => "Joao", 1 => "Pedro", 2 => "Lucas" );
//echo $listaDeAlunos[1];

//$listaDeAlunos = ["Joao", "Pedro", "Lucas"];
//echo $listaDeAlunos[2];

$listaDeAlunos = ["Joao", "Pedro", "Lucas"];
$notasDeAlunos = [1, 3, 2];
//echo "O aluno ".$listaDeAlunos[2]." tirou nota ".$notasDeAlunos[2];

if ($notasDeAlunos[2] >= 5){
  //echo " e está aprovado!";
}else {
  //echo " e está reprovado!";
}

for ($i=0; $i < sizeof($listaDeAlunos); $i++) {

if($notasDeAlunos[$i] > 2) {
  echo "O aluno ".$listaDeAlunos[$i]." tirou a nota ".$notasDeAlunos[$i]." e está aprovado!"."<br>";
}else{
  echo "O aluno ".$listaDeAlunos[$i]." tirou a nota ".$notasDeAlunos[$i]." e está reprovado!"."<br>";

}




}








 ?>
