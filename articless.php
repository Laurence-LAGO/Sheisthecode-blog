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
	<title>Côte d'Ivoire : Soro sur le coup d'après ?  </title>
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

	<div class="banner" style="background-image: url('img/imgr3.jpg'); height: 270px;">
 		<div class="banner-content">
   		 	<h2 style="color: red"> <b>  Côte d'Ivoire News </b> </h2>
   		 	<h2 style="color: red"> <b> Visualisez toute l'actualité ivoirienne </b> </h2> 
   		 </div>
   		</div>
   		<br>

    <h2> <b style="color: red"> Titre: Côte d'Ivoire : Soro sur le coup d'après ? </b> </h2>

    

    <p> Alors que la réforme constitutionnelle du 8 novembre 2016 inaugurant la IIIe République ivoirienne remettait en question sa place dans l'ordre protocolaire au sommet de l'État dans le sens d'un abaissement avec l'introduction d'un vice-président, et que, par ailleurs, la découverte d'armes au domicile à Bouaké de son ami et chef du protocole à l'Assemblée, Souleymane Kamagaté dit « Soul to Soul », au plus fort de la dernière mutinerie des ex-rebelles intégrés dans l'armée, le fragilisait et l'isolait encore plus, Guillaume Soro, résident de l'Assemblée nationale ivoirienne et ex-chef de la rébellion, vient de frapper un coup dont on n'a pas pas fini de mesurer la portée. <br> <br>
    <b> Objectif : réconciliation nationale </b> <br> <br>

De quoi s'agit-il ? Ce jeudi, Guillaume Soro a demandé solennellement « pardon aux Ivoiriens » et à son principal adversaire du passé, l'ex-président Laurent Gbagbo, écroué depuis 2011 à La Haye où il est jugé par la CPI. « Aujourd'hui, dit-il, la Côte d'Ivoire a plus que besoin de pardon et de réconciliation. Je veux demander pardon aux Ivoiriens pour tout ce que j'ai pu faire [...] à ce peuple qui a tant souffert. Je demande pardon à mes aînés [...] et même au président Laurent Gbagbo », a-t-il déclaré cité par l'AFP. « La division fait du tort à nous tous. Ne divisons pas la Côte d'Ivoire ! Travaillons à la paix ! Dans les jours suivants, je serai plus engagé pour le pardon et la réconciliation. Même Gbagbo mérite que j'aille lui demander pardon. Je demanderai pardon à tout le monde », a-t-il ajouté, citant aussi l'ancien président Henri Konan Bédié, un des principaux acteurs de la crise, et l'actuel président Alassane Ouattara. « Parce depuis 2002, jusqu'à ce jour, j'ai été un acteur important », a expliqué M. Soro. « Ce dont la Côte d'Ivoire a besoin, c'est de beaucoup plus de tolérance, de pardon, de réconciliation, de paix », a-t-il poursuivi. Est-ce une manière de réagir au récent remaniement qui a conduit à la nomination de son rival intime Ahmed Bagayoko au ministère de la Défense et de rappeler le rôle central qu'il a joué aux côtés du président Alassane Ouattara dans les heures sombres que le pays a traversées pendant la crise post-électoral ? En tout cas, une chose est sûre : Guillaume Soro dont les ambitions présidentielles ne sont pas un secret se positionne d'ores et déjà au-dessus de la mêlée. <br> <br>

<b> Soro dans la figure du rassembleur </b> <br> <br>

Premier ministre de 2011 à 2012, Guillaume Soro a été le chef de la rébellion pendant la décennie (2002-2011) de crise politico-militaire ivoirienne qui a fait des milliers de morts et scindé le pays en deux. Régulièrement accusé par ses détracteurs de « comploter » pour satisfaire ses ambitions présidentielles, il se défend en indiquant qu'il s'agit-là de « rumeurs » et qu'il « n'en tient pas compte ». Au regard de la ligne qu'il franchit pour demander pardon, Guillaume Soro se met dans la posture du rassembleur. Faut-il le rappeler ? Guillaume Soro n'avait pas ennemi plus fort, pendant la crise post-électorale, que l'ancien président Laurent Gbagbo, âgé aujourd'hui de 72 ans, ainsi que Charles Blé Goudé, ancien chef du mouvement des Jeunes patriotes fidèles à Laurent Gbagbo, aujourd'hui accusés à la Cour pénale internationale (CPI) de quatre chefs de crimes contre l'humanité : meurtres, viols, persécutions et autres actes inhumains, accusations face auxquelles les deux hommes ont plaidé non coupables. « Personne n'a intérêt à jouer contre la stabilité de la Côte d'Ivoire [...] Je tends la main. Je veux que tous les fils et filles du pays, nous puissions nous donner la main pour reconstruire l'unité et l'union. Ne nous divisons pas ! La division nous mènera droit à la catastrophe. Il faut sauver la Côte d'Ivoire ! Il faut bâtir la paix », a conclu M. Soro. <br> <br>


<b> Une déclaration sur fond de tension latente, voire de violences </b> <br> <br>

Pour rappel, les violences de la crise post-électorale avaient fait plus de 3 000 morts en cinq mois entre décembre 2010 et avril 2011 dans les deux camps, alors qu'une crise était née du refus de Laurent Gbagbo de céder le pouvoir à son rival Alassane Ouattara, reconnu internationalement vainqueur de l'élection présidentielle de 2010. Le problème, c'est que la Côte d'Ivoire a été secouée depuis le début de l'année par plusieurs mutineries dans l'armée. L'épicentre de ces mutineries est Bouaké, ancienne capitale de la rébellion dans le Nord et fief de M. Soro. Celui-ci s'est gardé d'intervenir dans les mutineries, mais la présence d'anciens « ComZone » (chefs de régions rebelles) aux négociations sur la mutinerie a rappelé que ces ex-chefs rebelles sont encore puissants. En tout cas, en janvier et en mai derniers, d'anciens rebelles intégrés dans l'armée se sont mutinés et ont fini par obtenir de l'État 12 millions de francs CFA (18 000 euros) pour chacun des 8 400 d'entre eux. Cette crise a considérablement fragilisé l'équipe gouvernementale et surtout le président Alassane Ouattara. Le week-end dernier, trois soldats sont morts dans des tirs dans un camp militaire de Korhogo, grande ville du nord du pays. Et mercredi soir, de nouveaux incidents impliquant les forces de sécurité ont éclaté à Abidjan, faisant un mort, à 48 heures de l'ouverture des Jeux de la Francophonie dans la capitale économique ivoirienne, premier grand événement international organisé dans le pays depuis la fin de la crise. Dans un tel contexte, la sortie de Guillaume Soro ne peut manquer d'avoir un sens hautement politique pour des lendemains pleins de nuages. 

</p>


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