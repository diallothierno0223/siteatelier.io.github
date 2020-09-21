<?php 
session_start();

$nom = "diallo";
$prenom = "thiernomamadousaliou";
$mdp = "thierno0223";

if (isset($_POST['submit'])) 
{
	$v_nom = htmlspecialchars($_POST['nom']);
	$v_prenom = htmlspecialchars($_POST['prenom']);
	$v_mdp = htmlspecialchars($_POST['mdp']);

	if ($nom == $v_nom and $prenom == $v_prenom and $mdp == $v_mdp) 
	{
		$_SESSION['connect'] = "connecter";
		header('location:admin.php');
	}
	else
	{
		$erreur = "vous avez saisie de mauvaise information ! veuillez quiter cette page si vous ete pas un employer !!";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>connect admin</title>
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
									<label for="mdp">mot de passe : </label>
									<input type="password" id="mdp" name="mdp" placeholder="ex : aaaaa00@gmdp.com" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-send" ></span>  connection</button>
								</div>
								<div class="form-group">
									<h3 style="color: red;"><?php if(isset($erreur)){echo($erreur);} ?></h3>
								</div>
						</fieldset>
		</form>

	</div>
</body>
</html>