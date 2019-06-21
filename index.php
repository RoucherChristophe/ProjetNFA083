<?php 
$expiration = 365*24*3600; // J'initialise la variable expiration d'1 an
	setcookie ('msg', 'Bienvenue', time()+$expiration); // Je génère le cookie

session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

include 'include/Database.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Accueil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta description="L'expression châteaux de la Loire regroupe sous une même appellation touristique un ensemble de châteaux français situés dans le Val de Loire. Le territoire connu sous le nom de comté de Tours est âprement disputé entre le xe siècle et le xie siècle par la maison féodale blésoise et la maison d'Anjou ; cette guerre sera à l'origine de très nombreux châteaux du val de Loire actuels1. Les châteaux de la Loire ont la particularité d'avoir été, pour la plupart, bâtis ou fortement remaniés à la Renaissance française (XVe-XVIes.), à une époque où la cour des rois de France était installée dans cette région. La notion de châteaux de la Loire revêt principalement une acception touristique, liée à cette exceptionnelle densité de monuments à visiter. Toutefois ils ont la particularité architecturale d'être pour la plupart2 construits en tuffeau turonien ou en brique avec chaînages en tuffeau.">

	<link rel="stylesheet" type="text/css" media="screen" href="css/Styles.css" />

	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link rel="shortcut icon" href="img/Chateau.ico" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140251563-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-140251563-1');

	</script>



</head>

<body>
	<!-- header -->
	<?php include 'include/Header.php' ?>
	<!-- menu -->
	<?php include 'include/Menu.php' ?>


	<div class="container">

		<h1>Bienvenue sur notre site sur les châteaux de la Loire</h1><br>

		<div id="cookie">
			<h3>
				<?php              
            if ($_SESSION['count'] == 0) {
               echo $_COOKIE['msg']; 
            }    
              ?>
			</h3>
		</div>

		<div id="img_index">
			<img src="img/chateaux_de_la_Loire.png" alt="Image des chateaux de la Loire">
		</div><br><br>
		<div id="description_index">
			<p><strong>L'expression châteaux de la Loire</strong> regroupe sous une même appellation touristique un ensemble de châteaux français situés dans le <strong>Val de Loire</strong>. Le territoire connu sous le nom de <strong>comté de Tours</strong> est âprement disputé entre le Xe siècle et le XIe siècle par la maison féodale blésoise et la maison d'Anjou ; cette guerre sera à l'origine de très nombreux châteaux du val de Loire actuel. <strong>Les châteaux de la Loire</strong> ont la particularité d'avoir été, pour la plupart, bâtis ou fortement remaniés à la <strong>Renaissance française (XVe-XVIes.)</strong>, à une époque où <strong>la cour des rois de France</strong> était installée dans cette région. </p>
			
			<p><strong>La notion de châteaux de la Loire </strong>revêt principalement une acception touristique, liée à cette exceptionnelle densité de <strong>monuments</strong> à visiter. Toutefois ils ont la particularité architecturale d'être pour la plupart construits en <strong>tuffeau turonien ou en brique avec chaînages en tuffeau</strong>. Il s’agit d’un <strong>héritage des rois de France</strong>, amoureux du Val de Loire. Aux côtés des <strong>forteresses (Chinon, Loches)</strong> puis des <strong>domaines royaux (Amboise)</strong>, ont fleuri de nombreux châteaux à l’initiative des grands personnages du royaume <strong>(Azay-le-Rideau, Chenonceau, Villandry)</strong> et de la noblesse de cour. Édifies à des fins défensives au moyen-âge <strong>(Langeais, Le Rivau, Ussé)</strong>, les châteaux de la Loire vont s’ouvrir vers l’extérieur à la Renaissance, abandonnant leurs austères remparts et pont-levis pour un esthétisme inspiré par la culture italienne. C’est à cette époque que la <strong>tradition des jardins</strong>, pensés comme de <strong>véritables « salons d’extérieurs »</strong>, est née en Val de Loire. La renaissance est permanente et le patrimoine de la Touraine se projette vers l’avenir. Un peu partout, des initiatives contribuent à renouveler les modes de découverte et les parcours de visite dans les châteaux de la Loire.</p>
			 
			<p><strong>L’itinéraire cyclotouristique de la « Loire à Vélo »</strong> offre aussi, la possibilité de conjuguer vacances actives avec la <strong>découverte du patrimoine</strong> . Et si la belle saison voit se multiplier de beaux <strong>spectacles sons et lumières</strong>, l’hiver n’est pas en reste. En quelques années, la Touraine est devenue une destination en vogue pour les vacances de décembre grâce à <strong>l’opération “Noël au pays des châteaux”</strong> : 6 de nos grands châteaux de la Loire déploient de beaux parcours thématisés pour les fêtes de fin d’année !</p>

		</div>
	</div>
	<!-- footer -->
	<?php include 'include/Footer.php' ?>

</body>

</html>
