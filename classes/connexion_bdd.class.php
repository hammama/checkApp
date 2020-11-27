
<?php
class Connexion{
	private $bdd;
	public function get_connexion(){
		try
		{
	$this->bdd = new PDO('mysql:host=localhost;dbname=check_db;charset=utf8', 'root', '');
		}
catch (Exception $e)
		{
        die('Erreur : ' . $e->getMessage());
		}

return $this->bdd;
	}

}



?>