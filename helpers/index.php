<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>


<div class="general-content">
<h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des apprenants. Faites du PHP pour mélanger ce résultat et obtenir 4 apprenants au hasard.
    </p>
<h2>Résultat</h2>


    <!-- Début du code à remplacer par votre PHP -->
    <?php
    $getPeople = $dbconnexion->query('select nom, prenom from users ');
    $allPeople = $getPeople->fetchAll();
    $rand_people = array_rand($allPeople, 4);
    foreach($rand_people as $person) {
        echo "<div class='choix-aleatoire'>".$allPeople[$person]['prenom']." ".$allPeople[$person]['nom']."</div>";
    };
    
    ?>



    <!-- <div class="choix-aleatoire">DETHIER Maxime</div><div class="choix-aleatoire">BAALY Ike David</div><div class="choix-aleatoire">PENTEADO Anthony</div> -->
    <!-- Fin du code à remplacer par votre PHP -->

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>