<html>
<head>
<title>Stergere</title>
</head>


<?php

$conex=mysql_connect('localhost', 'root', 'cnih')
or die ('Nu ma pot conecta la server: ' .mysql_error());

mysql_select_db('jucatori_de_fotbal',$conex) or die('Nu am putut selecta baza de date');

$query = mysql_query('select * from Jucatori') or die ("interogare nereusita");

?> 
<?php
$Nume=$_POST['Nume'];

$query = mysql_query ("DELETE FROM Jucatori WHERE Nume='$Nume'") or die ("nu am sters");
if($query) echo "interogarea a fost stearsa";
else echo "eroare la stergere";
?>