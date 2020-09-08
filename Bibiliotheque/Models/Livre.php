<?php
class Livre
{
    private $id;
    private $titre;
    private $auteur;
    private $resume;

    /**
     * Get the value of ID
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        return $this->titre = $titre;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        return $this->auteur = $auteur;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        return $this->resume = $resume;
    }

    public function getConnection() {
        try {
			$bdd = new PDO('mysql:host=localhost:3308;dbname=biblio', "admin", "admin");
		}
		catch ( PDOException $e){
			print "Erreur";
		}

		return $bdd;
	}

    public function insert($titre, $auteur, $resume)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("INSERT INTO livre (titre, auteur, resume) VALUES ('$titre', '$auteur','$resume')");
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

    }
    
    public function show($titre, $auteur, $resume)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("INSERT INTO livre (titre, auteur, resume) VALUES ('$titre', '$auteur','$resume')");
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

    }
    
    public function list()
    {
        $bdd = $this->getConnection();

        $sql = $bdd->prepare("SELECT * FROM livre");
        
        $sql->execute();

        $resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'livre');
        
        return $resultat;
    }
}
