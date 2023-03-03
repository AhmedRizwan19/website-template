 <html>
<head><title> Adaugare  </title></head>


<?php
$conex=mysql_connect('localhost','root','cnih')
or die('nu ma pot conecta:'.mysql_error());
mysql_select_db('jucatori_de_fotbal',$conex) or die('Nu am putut selecta baza de date');

$query = mysql_query('select * from Jucatori') or die ("interogare nereusita");
$numlinii=mysql_numrows($query);
echo "Sunt ".$numlinii." inregistrari in tabela<br><br>";
?>
<?php
 $Nr_Crt=$_POST['Nr'];
 $Nume=$_POST['Nume'];
 $Data_nasterii=$_POST['Data_nasterii'];
 $Tara=$_POST['Tara'];
 $Echipa=$_POST['Echipa'];
 $Post=$_POST['Post'];


$sql="INSERT INTO Jucatori VALUES ('$Nr_Crt','$Nume','$Data_nasterii','$Tara','$Echipa','$Post')";
if(mysql_query($sql,$conex))
echo "Adaugare reusita";
else
echo "Esec la adaugare";
?>
 </html>