<?php
include("Node.php");
$mysqli = new mysqli("localhost", "root", "", "fannypastor");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/*
function contar(Node A){
   if(A!=NULL) 
   return(contar(A->$leftNode)+contar(A->$rightNode)+1); 
   else 
   return(0); 
}

$tempNodo = new Node();
$num = contar($tempNodo);
*/

function calculaPuntaje(){
  $nronodos = 3;
  $puntaje = $nronodos*500;
  return $puntaje;
}
function calculaNivel(){
  $temppuntaje=calculaPuntaje(); //500
  if ($temppuntaje == 0) $nivel="Vendedor"; 
  if ($temppuntaje>0 && $temppuntaje <= 500) $nivel="Bronze";
  if ($temppuntaje>500 && $temppuntaje <= 1000) $nivel="Prata"; 
  if ($temppuntaje>1000 && $temppuntaje <= 2000) $nivel="Ouro";
  if ($temppuntaje>2000 ) $nivel="Diamante";  
  return $nivel;
}
$puntaje=calculaPuntaje();
$level=calculaNivel();

/* retorna la lista de los nombres y apellidos de la tabla vendedor --7*/
echo $MakeHTML = "<br><center><h1>Reporte Tabela 3</h1></center>";
echo $MakeHTML = "<table border='1' align='center' width='400'><tr>";
echo $MakeHTML = "<th>Vendedor</th><th>Pontos</th><th>Nivel</th></tr><tr>";
if ($result = $mysqli->query("SELECT id,nome,sobrenome FROM vendedor")) {
   while( $row = $result->fetch_assoc()){
   echo $MakeHTML = "<td>"; echo $row["nome"];
   echo $MakeHTML = "</td><td>"; echo $puntaje;
   echo $MakeHTML = "</td><td>"; echo $level;
   echo $MakeHTML = "</td></tr><tr>";
}
echo $MakeHTML = "</tr></table>";
echo $MakeHTML = "<a href='index.htm'>INICIO</a>";

$result->close();

}else{
    echo 'Could not run query: ' . mysql_error();
    exit;
}

?> 
