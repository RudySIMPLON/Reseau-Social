<?php 
if(isset($_POST['envoyer'])){

	if(isset($_POST['nom'],$_POST['prenom'],$_POST['message']));

extract($_POST);

echo "Je mappel" ." ".$nom. " ".$prenom. " ". "Voici mon message :"."
" .$message;


}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form method="post">
	<p>
		<label for="nom">Nom</label> 
		<input type="text" name="nom" id="nom" required="required"><br/>

		<label for="prenom">Prenom</label>
		<input type="text" name="prenom" id="prenom" required="required"><br/>

		<label for="message">Message</label>

		<textarea name="message" id="message" cols="30" rows="10" required="required"></textarea > <br/>

		<input type="submit" name="envoyer" value="Envoyer">

		</p>
	</form>	
</body>
</html>