<?php

$bdd = new PDO('mysql:host=localhost;dbname=site_atelier','root','');
if (isset($_POST['submit'])) 
{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$num = htmlspecialchars($_POST['num']);
	$msg = htmlspecialchars($_POST['msg']);

	if (isset($nom) and isset($prenom) and isset($mail) and isset($num) and isset($msg) and !empty($nom) and !empty($prenom) and !empty($mail) and !empty($num) and !empty($msg)) 
	{
		$ajout_msg = $bdd->prepare('INSERT INTO message(date_ajout,nom,prenom,mail,numero,message) VALUES (now(),?,?,?,?,?)');
		$ajout_msg->execute(array($nom,$prenom,$mail,$num,$msg));
		$erreur = "votre message a bien été envoyer";
	}
	else
	{
		$erreur = "veuillez remplir tout les champs !";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.css">
	<script src="bootstrap-3.1.1/js/tests/vendor/jquery.js"></script>
	<script src="bootstrap-3.1.1/dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="particulier.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-fluid">
		<!-- ajout de l'entete -->
		<?php include("entete.php") ?>


		<!-- debut du corps du site -->

		<div>
			<div class="row">
				<div class="col-lg-4 visible-lg ">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h4>Addresse :</h4>
								<p>riviera 2 / cocody / abidjan</p>
								<p><span class="glyphicon glyphicon-earphone"></span> : 00225 07-90-12-13</p>
								<p><span class="glyphicon glyphicon-earphone"></span> : 00225 42-53-62-74</p>
								<p><span class="glyphicon glyphicon-map-marker"></span> <a href="https://goo.gl/maps/CrXi1bEkEGWWiZ7b8">cliquer ici pour nous afficher sur google maps</a></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<h4>nos reseau sociaux</h4>
							<img src="image/FACEBOOK.png" alt="lien facebook" class="logo2 img-rounded">
							<h4 style="text-align: center;"><a href="www.facebook.com" style=" color: black;">  page facebook  </a></h4>
							<img src="image/GMAIL.jpg" alt="lien gmail" class="logo2 img-rounded">
							<h4 style="text-align: center;"><a href="www.gmail.com" style=" color: black;">  gmail  </a></h4>
						</div>
					</div>
				<div class="col-lg-7 col-lg-offset-1">
					<h4  style="text-align: center; color: blue;"><?php if(isset($erreur)){echo($erreur);} ?></h4>

					<form method="POST" action="">
						<fieldset>
							<legend>message</legend>
							<div class="form-group">
									<label for="nom">Nom : </label>
									<input type="text" id="nom" name="nom" placeholder="ex : diallo" class="form-control">
								</div>
								<div class="form-group">
									<label for="prenom">Prenom : </label>
									<input type="text" id="prenom" name="prenom" placeholder="ex : amadou " class="form-control">
								</div>
								<div class="form-group">
									<label for="mail">mail : </label>
									<input type="email" id="mail" name="mail" placeholder="ex : aaaaa00@gmail.com" class="form-control">
								</div>
								<div class="form-group">
									<label for="num">numero : </label>
									<input type="number" id="num" name="num" placeholder="ex : 00225 01 02 03 04 05" class="form-control">
								</div>
								<div class="form-group">
									<label for="msg">message : </label>
									<textarea id="msg" name="msg" class="form-control"></textarea>
								</div>
								<button type="submit" name="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-send" ></span>  envoyer</button><br><p> </p>
						</fieldset>
					</form>
					
				</div>
			</div>
		</div>

		<!-- fin du corps du site -->

		<!-- ajout du pied de page -->
		<?php include("pied.php") ?>
	</div>

</body>
</html>