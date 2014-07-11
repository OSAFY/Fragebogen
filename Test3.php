<html>
<head>

 

<title>Test 3</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">



$(document).ready(function() {
    $("#test3").submit(function() {
		
if(document.getElementById("sicher1").checked ^ document.getElementById("sicher2").checked ^ document.getElementById("sicher3").checked ^ document.getElementById("sicher4").checked && document.getElementById("Stadt1").checked ^ document.getElementById("Stadt2").checked ^ document.getElementById("Stadt3").checked ^ document.getElementById("Stadt4").checked){
	$("#weiter").attr("disabled","disabled");
	$("#richtig").html("Lade...");
	$.ajax({
		type: "POST",
		url:"Test4.php",
		data: "sicher=" + $("#sicher").val() + "&Stadt=" + $("#Stadt").val() + "&name=" + $("#name").val(),
		success: function(msg)
		{
		window.location = "Test4.php";
		}
		});
		
		
} else {
	
	$("#fehler").html("Bitte alle Felder ausf&uuml;llen!");
	}
		return false;
	});
});



	

</script>


</head>

<body>


<p><h1>Fragebogen</h1></p>

<div id="fehler" style="color:#F00"> </div>
<div id="richtig"></div>
<form  method="POST" action="Test4.php" id="test3">
<table border="1">
<tr>
<th></th>
<th  width="120"> trifft zu</th>
<th  width="120"> trift eher zu</th>
<th width="120"> trifft eher nicht zu</th>
<th width="120">trifft nicht zu</th>
</tr>
<tr>
<th>Sicher?
<br>
<th><input id="sicher1" type="radio" name="sicher" value="ja"/></th>
<th><input name="sicher" type="radio" id="sicher2" value="evtl ja"/></th>
<th> <input id="sicher3" type="radio" name="sicher" value="evtl nein"/></th>
<th> <input id="sicher4" type="radio" name="sicher" value="nein"/></th>
</tr>
<tr>
<th>Stadt?</th>
<th width="25"> <input id="Stadt1" type="radio" name="Stadt" value="ja_Stadt"/></th>
<th  width="25"> <input id="Stadt2" type="radio" name="Stadt" value="evtl ja_Stadt"/></th>
<th  width="25"> <input id="Stadt3" type="radio" name="Stadt" value="evtl nein_Stadt"/></th>
<th  width="25"> <input id="Stadt4" type="radio" name="Stadt" value="nein_Stadt"/></th>
</tr>
</table>
<input type="text" name="name" id="name">

<p> <input id="weiter" type="submit" name="weiter" value="weiter"/> </p>

</form>
<?php
echo $_POST['straße1']
?>

 <p><a href="../index.php"><input type="button" name="zurück_test1" value="Test abbrechen"/></a></p>  
<p><a href="Test2.php"><input type="button" name="zurück" value="Zur&uuml;ck"/></a></p>



</body>
</html>