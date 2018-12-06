<?php
$mysqli = new mysqli("localhost", "root", "", "fannypastor");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* return name of current default database --7*/
echo $MakeHTML = "<BR><center><h1>Base de Datos Vendedor</h1></center>";
echo $MakeHTML = "<table border='1' align='center' width='400'><tr>";
echo $MakeHTML = "<th>id</th><th>nome</th><th>sobrenome</th></tr><tr>";
if ($result = $mysqli->query("SELECT id,nome,sobrenome FROM vendedor")) {
   while( $row = $result->fetch_assoc()){
   echo $MakeHTML = "<td>"; echo $row["id"];
   echo $MakeHTML = "</td><td>"; echo $row["nome"];
   echo $MakeHTML = "</td><td>"; echo $row["sobrenome"];
   echo $MakeHTML = "</td></tr><tr>";
}
echo $MakeHTML = "</tr></table>";
echo $MakeHTML = "<a href='index.htm'>INICIO</a>";
$result->close();

}else{
    echo 'Could not run query: ' . mysql_error();
    exit;
}