<?php

include 'header-init.php';
include 'jwt-helper.php';

$user = extractJwtBody();

//on recupère les tickets, l'utilisateur qui l'a créé, ainsi que le nombre de message qu'il contient
$request = $connexion->query(
    "SELECT * FROM trajet"
    
);

$trajetList = $request->fetchAll();

echo json_encode($trajetList);
