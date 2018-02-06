<?php include('connexion.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO articles (titre,prix,stock,image,description,id_categories, id_users) VALUES ('".$_POST['titre']."','".$_POST['prix']."','".$_POST['stock']."','".$_POST['image']."','".$_POST['description']."','".$_POST['id_categories']."','".$_POST['id_users']."')";$result=mysqli_query($link,$sql);
		if ($result) {
				$msg='<h3 style="color:green">Insertion reussie!</h3>';
				}else{
				$msg=mysqli_error($link);
				die();
		}
	}

	if (isset($_GET['id']))
	{
		$update="SELECT * FROM articles WHERE id=".$_GET['id'];
		$res=mysqli_query($link,$update);
		$dataU=mysqli_fetch_array($res);
	}

if (isset($_GET['sup']))
	{
		$delete="DELETE  FROM articles WHERE id=".$_GET['sup'];
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
	<title> CPI : Reprise du procès de Gbagbo et Blé Goudé le 17 Janvier à la CPI </title>
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
        <li><a href="articles.php">Articles</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="users.php">Users</a></li>

     </ul>
    	</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
	</nav>

	<div class="banner" style="background-image: url('img/imgr2.jpg'); height: 270px;">
 		<div class="banner-content">
   		 	<h2 style="color: red"> <b>  Côte d'Ivoire News </b> </h2>
   		 	<h2 style="color: red"> <b> Visualisez toute l'actualité ivoirienne </b> </h2> 
   		 </div>
   		</div>
   		<br>

    <h2> <b style="color: red"> Titre: CPI : Reprise du procès de Gbagbo et Blé Goudé le 17 Janvier à la CPI  </b> </h2>

    <p> Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24.
    Reprise du procès de Gbagbo et Blé Goudé le 28 novembre à la CPI. Suivre en direct le procès de Gbagbo et Blé Goudé sur http://player.cdn.tv1.eu/statics/66005/icc.html salle N°1 à partir de 9h30mn (+ léger différé de 30mn) et sur Africa24. </p>
   


    <br> 

	<div class="row" style="margin-top: 100px;">
		<div class="col-sm-6 col-sm-offset-3" style="background-color: orange;">
			<h2 style="color: red"> <b> Commentaires </b></h2>
			<span> <?php echo $msg; ?> </span> 
			<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div style="float: left; width:280px;">
				<textarea name="description" type="text" class="form-control"></textarea><br>
			</div>

			<button type="submit" name="ajouter" value="Enregistrer" class="btn-success " id="ajouter" style="margin-left: 90px;">
				Ajouter
			</button>
			</form>

			<br> <br> <br> <br>

			<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div style="float: left; width:280px;">
				<textarea name="description" type="text" class="form-control"></textarea><br>
			</div>

			<button type="submit" name="ajouter" value="Enregistrer" class="btn-success " id="ajouter" style="margin-left: 90px;">
				Ajouter
			</button>
			</form>

			<br> <br> <br> <br>

			<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div style="float: left; width:280px;">
				<textarea name="description" type="text" class="form-control"></textarea><br>
			</div>
				<button type="submit" name="ajouter" value="Enregistrer" class="btn-success " id="ajouter" style="margin-left: 90px;">
				Ajouter
				</button>
			</form>

			<br> <br> <br>
			
			<h3 style="color: red"> <b> Autres Commentaires </b> </h3>
		

			<br> <br> <br>



    			<div>
				<table border="2px" class="table">
					<thead style="background-color: yellow">
						<tr>
					 		<th><b>Numero</b></th>
					 		<th><b>Titre</b></th>
					 		<th><b>Description</b></th>
					 		<th><b>Resume</b></th>
					 		<th><b>Image</b></th>
					 		<th><b>Id_categories</b></th>
					 		<th><b>Id_users</b></th>
					 		<th><b>Action</b></th>
				 		</tr>
					</thead>

					<tbody>
							<?php	
							$n=1;
							$list=" SELECT * FROM articles"; 
							$res= mysqli_query($link,$list);
							 while ($data = mysqli_fetch_array($res)){
							?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $data['titre']; ?></td>
								<td><?php echo $data['description']; ?></td>
								<td><?php echo $data['resume']; ?></td>
								<td><?php echo $data['image']; ?></td>
								<td><?php echo $data['id_categories']; ?></td>
								<td><?php echo $data['id_users']; ?></td>
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

								$sql="UPDATE articles SET 
								titre='".$_POST['titre']."',
								description='".$_POST['description']."',
								resume='".$_POST['resume']."',
								image='".$_POST['image']."',
								id_categories='".$_POST['id_categories']."',
								id_users='".$_POST['id_users']."', WHERE id=".$_GET['id'];
							}else
								{
						
									$sql="INSERT INTO articles(titre,prix,stock,image,description,id_categories) 
									VALUES(
											'".$_POST["titre"]."',
											'".$_POST["description"]."',
											'".$_POST["resume"]."',
											'".$_POST["image"]."',
											'".$_POST["id_categories"]."',
											'".$_POST["id_users"]."'
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
		</div>




<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>