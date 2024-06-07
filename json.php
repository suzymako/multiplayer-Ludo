<?php

header("Access-Control-Allow-Origin: https://localhost/json.php");
header("Access-Control-Allow-Origin: *");

$joueurs = array(
    0 => array(
        "nom" => "Joueur1",
        "couleur" => "rouge",
        "dé" => 3,
        "case_courante" => 5
    ),
    1 => array(
        "nom" => "Joueur2",
        "couleur" => "vert",
        "dé" => 7,
        "case_courante" => 11
    )
);

// Accéder aux informations d'un joueur
echo $joueurs[0]["nom"] . " est de couleur " . $joueurs[0]["couleur"] . "\n";

// Modifier la position d'un joueur
$joueurs[1]["case_courante"] = 15;

// Parcourir tous les joueurs
foreach ($joueurs as $joueur) {
    echo "Nom: " . $joueur["nom"] . ", Couleur: " . $joueur["couleur"] . "\n";
}

?>
