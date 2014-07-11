<html>
<head>

</head>

<body>

<p>Danke f&uuml;r ihr Interesse.</p>


<?php
$verbindung = mysql_connect("localhost", "i-net", "23ms76kailAl") 
or die ("Fehler im System");
mysql_select_db("i-net")
or die ("Verbindung zur Datenbank war nicht möglich.");





mysql_close($verbindung);
?>
<?php
$strasse20 = $_POST['name'];
echo $strasse20;

echo $_POST['sicher'];

?>


</body>
</html>