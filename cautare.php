<?php
$conex=mysql_connect('localhost','root','cnih')
or die('Nu ma pot conecta:'.mysql_error());
mysql_select_db('jucatori_de_fotbal',$conex) or die('Nu am putut selecta baza de date');
$Oras=$_POST['Oras'];
$query = mysql_query("SELECT * FROM Jucatori where Echipa='$Echipa'") or die (mysql_error());
$numlinii=mysql_numrows($query);
echo "Sunt ".$numlinii." inregistrari in tabela care indeplinesc conditia 
<br><br>";
?>
<table>
<?php
echo "<b> magiaegiptului - Atractii turistice in orasul</b>".$Oras;
echo "<tr>";
echo "<td>Nr.Crt.</td>";
echo "<td>Nume</td>";
echo "<td>Data_nasterii</td>";
echo "<td>Tara</td>";
echo "<td>Echipa</td>";
echo "<td>Post</td>";
 
echo "</tr>";
while($row = mysql_fetch_array($query))
{ echo '<tr>';
echo "<td>".$row['Nr Crt'] .""."</td>";
echo "<td>".$row['Nume']." </td>";
echo "<td>".$row['Data_nasterii']."</td>";
echo "<td>".$row['Tara']."</td>";
echo "<td>".$row['Echipa'] .""."</td>";
echo "<td>".$row['Post']." </td>";

 
echo '</tr>';
}
?>
</table>