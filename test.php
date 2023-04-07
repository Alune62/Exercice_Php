<?php
//Les changements apportés incluent :

// Suppression de la variable $i et de la variable $nbMoutons car elles ne sont pas utilisées.
// Utilisation de l'opérateur d'addition raccourcie (+=) pour la somme des valeurs des moutons.
// Utilisation de la fonction count() pour obtenir le nombre de moutons dans le tableau.
// Suppression des lignes en double pour le calcul de la moyenne après avoir ajouté les 100 moutons aléatoires.


// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);

// Je calcule la moyenne de la valeur de mes moutons
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
	$sumValMoutons += $mouton[1];
}
$moyValMoutons = $sumValMoutons / count($moutons);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons;

// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) { 
	$randNameMouton = "";
	$nbCharsNameMouton = rand(3, 15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
	$randValMoutons = rand(10, 200);
	for($k=0; $k<$nbCharsNameMouton; $k++) {
        $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
    }
	array_push($moutons, [$randNameMouton, $randValMoutons]);
}
echo PHP_EOL;

// Je calcule à nouveau la moyenne
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
	$sumValMoutons += $mouton[1];
}
$moyValMoutons = $sumValMoutons / count($moutons);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons;


//print_r($moutons);
?>

