

<?php
$conex=mysql_connect('localhost','root','cnih')
or die('Nu ma pot conecta:'.mysql_error());
mysql_select_db('jucatori_de_fotbal',$conex) or die('Nu am putut selecta baza de date');
$query = mysql_query('select * from Jucatori') or die ("interogare nereusita");?>
<table border="5" align= "center"  bordercolor="#FFFF99" bgcolor="#FFFFCC">
<?php
echo '<pre><b>
</b></pre>';
echo "<tr>";
echo "<td>Nr.Crt.</td>";
echo "<td>Nume</td>";
echo "<td>Data nasterii</td>";
echo "<td>Tara</td>";
echo "<td>Echipa</td>";
echo "<td>Post</td>";
echo "</tr>";
while($row = mysql_fetch_array($query))
{ echo '<tr>';
echo "<td>".$row['Nr Crt'] .""."</td>";
echo "<td>".$row['Nume']." </td>";
echo "<td>".$row['Data_nasterii']." </td>";
echo "<td>".$row['Tara']."</td>";
echo "<td>".$row['Echipa'] .""."</td>";
echo "<td>".$row['Post']." </td>";
 
echo '</tr>';
}
?>
</table>
