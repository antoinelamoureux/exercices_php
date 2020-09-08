<?php 
require_once('Controllers/LivreController.php');
require_once('Vues/header.html');
$livre = new LivreController();
if (isset($_GET['action']) && $_GET['action'] === 'ajouter') {
    $livre->ajouterLivre();
} else {
    $livre->afficherLivre();
}
