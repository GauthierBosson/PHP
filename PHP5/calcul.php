<?php
include "functions.php";

$longueur = $_POST['longueur'];
$largeur  = $_POST['largeur'];
$hauteur  = $_POST['hauteur'];
$surface = calculerSurface($longueur, $largeur, $hauteur);

if ($surface) {
    echo("La surface est de : $surface");
}

else {
    echo("Vérifie tes données...");
}

/*$toto = "La longueur est de $longueur et la largeur de $largeur.";
echo($toto);*/