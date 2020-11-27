<?php 
require_once 'connexion_bdd.class.php';


//classe Utilisateur
	class Utilisateur{
		private $user_name;
		private $user_pass;
		//constructeur
		function __construct2($name,$pass)
            {
             $this->user_name = $name;
             $this->user_pass = $pass;
   		    } 
		//fonction de verification des identifiants
      public function verification_id(){
      	//connexion à la base de données
      	var_dump($this->user_pass);
        $connexion = new Connexion();
        $bdd = $connexion -> get_connexion();    	
        // On récupère tout le contenu de la table utilisateur
		 $reponse = $bdd->query('SELECT * FROM utilisateur');
		 
		 $valide = null;
		 // On affiche chaque entrée une à une
		 while ($donnees = $reponse->fetch())
		    {
		 	if($donnees['login'] == $this->user_name && $donnees['mdp'] == $this->user_pass){
		 		$valide = "OK";
		 	}
            } 
            var_dump($valide);
        return $valide;
        
	        }
	    public function afficher_login(){
	    	echo $this->user_name;
	    }	
				}
?>
