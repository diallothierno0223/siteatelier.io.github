<?php 
session_start();

if(isset($_SESSION['connect']))
{

	$bdd = new PDO('mysql:host=localhost;dbname=site_atelier','root','');


?>

<!DOCTYPE html>
<html>
<head>
	<title>page admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.css">
	<script src="bootstrap-3.1.1/js/tests/vendor/jquery.js"></script>
	<script src="bootstrap-3.1.1/dist/js/bootstrap.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="particulier.css"> -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h1 style="text-align: center;"><a href="deconnect.php">deconnection</a></h1></div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>id </th>
								<th>nom </th>
								<th>prenom </th>
								<th>mail </th>
								<th>numero </th>
								<th>message  </th>
							</tr>
						</thead>
						<tbody>
							<?php
								$donne = $bdd->query('SELECT * FROM message ORDER BY id DESC');
								while ($reponse = $donne->fetch()) 
									{ ?>
									
										<tr>
											<td><?php echo($reponse['id']); ?></td>
											<td><?php echo($reponse['nom']); ?></td>
											<td><?php echo($reponse['prenom']); ?></td>
											<td><?php echo($reponse['mail']); ?></td>
											<td><?php echo($reponse['numero']); ?></td>
											<td><?php echo($reponse['message']); ?></td>

										</tr>

									<?php }

							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php
}
else
{
	header('location:connect.php');
}
?>