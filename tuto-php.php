<!-- Le php c'est du html / css mais avec des fonctionnalité dynamique,
La seul différence est que le fichier php peut fonctionner que si il est sur un serveur -->

<!-- Voici un code pour ecrire un text dans un site -->

<?php echo "Bonjour !"; ?>

<!-- Pour donner la date -->

<?php echo date('d/m/Y h:i:s'); ?>

<!-- Nous allons crée un fichier qui nous donnera plein d'info utile -->

<!-- et ecrire: -->

<?php

phpinfo(); ?>

<!-- Ce qui donnera une page avec toute les infos -->

<!-- Dans le fichier des info php,
rechercher la case (Loaded Configuration File)
puis, ouvrez le, pour activez les info d'erreur,
verifiez que
error_reporting = E_ALL 
et
display_errors =  on-->

<!-- ====================== -->
<!-- Les variables -->

<?php

// Pour déclarer une variable
$ageDuVisiteur = 20;
$quantite = 15;
$prix = 25.5;
$prenom = "Killian";
$vraiOuFaux = true;

// Pour affichier la variable
echo $ageDuVisiteur;

echo "Le visiteur a $ageDuVisiteur ans.";
// Ou une meilleur technique
echo 'Le visiteur a ' . $ageDuVisiteur . ' ans.';

$total = $prix * $quantite;

echo 'Cela coute ' . $total . ' EUR.'



?>

