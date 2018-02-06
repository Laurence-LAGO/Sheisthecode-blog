<?php include('connexion.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO users 
		(email,mot de passe,nom,prenoms) 
		VALUES ('".$_POST['email']."',
				'".$_POST['mot de passe']."',
				'".$_POST['nom']."',
				'".$_POST['prenoms']."')";
		$result=mysqli_query($link,$sql);
		if ($result) {
				$msg='<h3 style="color:green">Insertion reussie!</h3>';
				}else{
				$msg=mysqli_error($link);
				die();
		}
	}

	if (isset($_GET['id']))
	{
		$update="SELECT * FROM users WHERE id=".$_GET['id'];
		$res=mysqli_query($link,$update);
		$dataU=mysqli_fetch_array($res);
	}

if (isset($_GET['sup']))
	{
		$delete="DELETE  FROM users WHERE id=".$_GET['sup'];
		$res=mysqli_query($link,$delete);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="description" content="c'est blog en ligne">
	<meta name="author" content="codeuse promo2">
	<link rel="icon" href="../../../..favicon.ico">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: orange">
		<nav class="navbar navbar-default">
 	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
     	 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        	<span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
      	<img src="img/Logo2.jpg" height="60px">
    	</div>

     <ul class="nav navbar-nav navbar-right">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="users.php">Users</a></li>

     </ul>
    	</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
	</nav>
    <br>
<div class="container" style="height:100%; width: 80%">

		<div class="col-sm-6 col-sm-offset-3" >
	       <form action="" method="POST" role="form">
			<legend style="color: lightgreen"> <h1> Formulaire d'enregistrement </h1> </legend> <span> <?php echo $msg; ?> </span>
			<div class="row">

				<div class="form-group">
				<label><b>Nom:</b></label> <br>
				<input type="text" name="titre" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['titre']; ?>">
				<br>
				</div>

				<div class="form-group">
				<label><b>Prenoms:</b></label> <br>
					<input type="text" name="prix" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['prix']; ?>">
				<br>
				</div>

				<div class="form-group">
				<label><b>Email:</b></label> <br>
				<input type="text" name="stock" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['stock']; ?>">
				<br>
				</div>

				<div class="form-group">
				<label>  <b> Mot de passe:</b> </label><br>
				<input type="password" name="stock" class="form-control" value="<?php if (isset($_GET['id'])) echo $dataU['stock']; ?>">
				<br>
				</div>
				<button type="submit" class="btn btn-success btn-lg btn-block" id="btnValider" value="enregistrer" name="btnValider">Valider</button>
	 		</div>
	 	</form>

	 	</div><br> <br> <br> <br> <br> <br>

	 	
	 	


				<table border="2px" class="table">
					<thead style="background-color: yellow">
						<tr>
					 		<th><b>Numero</b></th>
					 		<th><b>Nom</b></th>
					 		<th><b>Prenoms</b></th>
					 		<th><b>Email</b></th>
					 		<th><b>Mot de passe</b></th>
					 		<th><b>Action</b></th>
				 		</tr>
					</thead>

					<tbody>
							<?php	
							$n=1;
							$list=" SELECT * FROM users"; 
							$res= mysqli_query($link,$list);
							 while ($data = mysqli_fetch_array($res)){
							?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $data['nom']; ?></td>
								<td><?php echo $data['prenoms']; ?></td>
								<td><?php echo $data['email']; ?></td>
								<td><?php echo $data['mot de passe']; ?></td>
								<td>
				 	   		<a href="?id=<?php echo $data['id'];?>" class="btn btn-primary" >Modifier</a>
				 	   		<a href="?sup=<?php echo $data['id'];?>" class="btn btn-warning">Supprimer</a>
				 	   	</td>
								
							</tr>
							<?php
								$n++;
							}?>
					</tbody>
				 
			 	</table>
			 	
			 	</div>

			 	<?php 
					if(isset($_POST["submit"]))
						{


						if(isset($_GET['id']))
							{ 

								$sql="UPDATE users SET 
								nom='".$_POST['nom']."',
								prenoms='".$_POST['prenoms']."',
								email='".$_POST['email']."',
								mot de passe='".$_POST['mot de passe']."' WHERE id=".$_GET['id'];
							}else
								{
						
									$sql="INSERT INTO categories(libelle,description) 
									VALUES(
											'".$_POST["nom"]."',
											'".$_POST["prenoms"]."'
											'".$_POST["email"]."'
											'".$_POST["mot de passe"]."'
										)";//die(sql);
								}
						$result=mysqli_query($link,$sql);
						if ($result) {
						echo "<h3 style=color:green>Super! Insertion reussie</h3>";
						# code...
						}else{
						echo "mysql_error()";
						die();
					}

			}
			 ?>




<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>