<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="images/style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jucatori de fotbal</title>

</head>
<body>

<!-- wrap starts here -->
<div id="wrap">

	
	
	<div id="header-photo"><img src="images/header.jpg" width="950" height="441" alt="header photo" /></div>	
	
	<!-- navigation starts-->	
	<div  id="nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="actualizare.php">Actualizare</a></li>
			<li><a href="campionat.html">Campionatul mondial</a></li>
			<li><a href="recorduri.html">Recorduri</a></li>
			<li><a href="galerie.html">Galerie imagini</a></li>		
		</ul>
	<!-- navigation ends-->	
	</div>					
			
	<!-- content-wrap starts -->
	<div id="content-wrap">
				
		<div id="main">
	   <div align="center"><h1>Actualizare baza de date</h1></div><br><br>	
<table border="1">
  <tr>
    <td align="center">Actualizare baza de date</td>
  </tr>
  <tr>
    <td>
      <table>
        <FORM ACTION="<?php echo $SERVER[PHP_SELF]; ?>"METHOD="POST">
        <tr>
          <td>Nr. Crt.</td>
          <td><input type="text" name="Nr" size="40">
          </td>
        </tr>
        <tr>
          <td>Nume</td>
          <td><input type="text" name="Nume" size="40">
          </td>
        </tr>
        <tr>

          <td>Data nasterii</td>
          <td><input type="text" name="Data_nasterii" size="40">
          </td>
        </tr>
<tr>
          <td>Tara</td>
          <td><input type="text" name="Tara" size="40">
          </td>
        </tr>
        <tr>
          <td>Echipa</td>
          <td><input type="text" name="Echipa" size="40">
          </td>
        </tr>
		
		<tr>
          <td>Post</td>
          <td><input type="text" name="Post" size="40">
          </td>
        </tr>
		
		
        <tr>
          <td></td>
          <td><input type="submit" 
          name="Adauga" value="Adauga">
<input type="submit" 
          name="Sterge" value="Sterge">
<input type="submit" 
          name="Cauta" value="Cauta">
<input type="submit" 
          name="Afiseaza" value="Afiseaza"></td>
        </tr>
        </table>
      </td>
    </tr>
</table>
<?php
if(isset($_POST['Adauga']))
include("adaugare.php");
if(isset($_POST['Afiseaza']))
include("afisare.php");
if(isset($_POST['Cauta']))
include("cautare.php");
if(isset($_POST['Sterge']))
include("stergere.php");
?>
<!-- main ends -->	
		</div>
		
		<div id="sidebar">

					
					
			<h3>Top 5 jucători din lume</h3>
			<ul class="sidemenu">				
				<li><a href="maradona.html">Diego Maradona</a></li>
				<li><a href="ronaldo.html"> Cristiano Ronaldo</a></li>
				<li><a href="messi.html">Lionel Messi</a></li>
				<li><a href="pele.html">Pele</a></li>	
				<li><a href="cruyff.html">Johan Cruyff</a></li>
			</ul>	
				
			<h3>Top 5 jucători români</h3>
			<ul class="sidemenu">
				<li><a href="hagi.html">Gheorghe Hagi </a></li>
				<li><a href="dobrin.html">Nicolae Dobrin </a></li>
				<li><a href="popescu.html">Gheorghe Popescu </a></li>					
			   	<li><a href="mutu.html">Adrian Mutu</a></li>
				<li><a href="chivu.html">Cristian Chivu</a></li>
            </ul>

					
					
						
		<!-- sidebar ends -->		
		</div>
		
	<!-- content-wrap ends-->	
	</div>

</body>
</html>