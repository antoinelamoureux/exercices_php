<?php

require_once './Models/Livre.php';

class LivreController {
    public function ajouterLivre() {
        require_once './Vues/ajoutLivre.html';
        $livre = new Livre();
        if (isset($_POST['submit'])) {
            $titre = $livre->setTitre($_POST['titre']);
            $auteur = $livre->setAuteur($_POST['auteur']);
            $resume = $livre->setResume($_POST['resume']);
            
           $livre->insert($titre, $auteur, $resume);
        }
    }

    public function afficherLivre() {
        $livre = new Livre();
        $affichage = $livre->list(); 
        require_once './Vues/afficherLivre.php';
    }
}

?>