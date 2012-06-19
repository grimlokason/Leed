<?php
	
/*
	@nom: mysql
	@auteur: Idleman (idleman@idleman.fr)
	@date de cr�ation: 
	@description: Classe de gestion des connexions Mysql
*/

class MysqlConnector
{
	private $id;
	private $hote;
	private $login;
	private $mdp;
	private $bdd;
	private $port;
	public $debug=0;
	public static $instance = null;
	
	private function __construct(){
		$this->connect();
	}

	

	/**
	* Methode de recuperation unique de l'instance
	* @author Valentin CARRUESCO
	* @category Singleton
	* @param <Aucun>
	* @return <mysql> $instance
	*/
	
	public static function getInstance(){
		
		if (MysqlConnector::$instance === null) {
			MysqlConnector::$instance = new self(); 
		}
		return MysqlConnector::$instance;
	}


	
	public function connect(){
		$connexion = mysql_connect(MYSQL_HOST,MYSQL_LOGIN,MYSQL_MDP);
		mysql_select_db(MYSQL_BDD,$connexion);
	}
	


	public function __toString(){
		$retour = "";
		$retour .= "instance de la classe MysqlConnector : <br/>";
		$retour .= '$hote : '.$this->hote.'<br/>';
		$retour .= '$login : '.$this->login.'<br/>';
		$retour .= '$mdp : '.$this->mdp.'<br/>';
		$retour .= '$bdd : '.$this->bdd.'<br/>';
		$retour .= '$port : '.$this->port.'<br/>';
		return $retour;
	}

	private  function __clone(){
		//Action lors du clonage de l'objet
	}

	// ACCESSEURS

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	/**
	* M�thode de r�cuperation de l'attribut hote de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param Aucun
	* @return <Attribute> hote
	*/

	public function getHote(){
		return $this->hote;
	}

	/**
	* M�thode de d�finition de l'attribut hote de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param <Attribute> $hote
	* @return Aucun retour
	*/

	public function setHote($hote){
		$this->hote = $hote;
	}

	/**
	* M�thode de r�cuperation de l'attribut login de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param Aucun
	* @return <Attribute> login
	*/

	public function getLogin(){
		return $this->login;
	}

	/**
	* M�thode de d�finition de l'attribut login de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param <Attribute> $login
	* @return Aucun retour
	*/

	public function setLogin($login){
		$this->login = $login;
	}

	/**
	* M�thode de r�cuperation de l'attribut mdp de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param Aucun
	* @return <Attribute> mdp
	*/

	public function getMdp(){
		return $this->mdp;
	}

	/**
	* M�thode de d�finition de l'attribut mdp de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param <Attribute> $mdp
	* @return Aucun retour
	*/

	public function setMdp($mdp){
		$this->mdp = $mdp;
	}

	/**
	* M�thode de r�cuperation de l'attribut bdd de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param Aucun
	* @return <Attribute> bdd
	*/

	public function getBdd(){
		return $this->bdd;
	}

	/**
	* M�thode de d�finition de l'attribut bdd de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param <Attribute> $bdd
	* @return Aucun retour
	*/

	public function setBdd($bdd){
		$this->bdd = $bdd;
	}

	/**
	* M�thode de r�cuperation de l'attribut port de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param Aucun
	* @return <Attribute> port
	*/

	public function getPort(){
		return $this->port;
	}

	/**
	* M�thode de d�finition de l'attribut port de la classe Mysql
	* @author Valentin CARRUESCO
	* @category Accesseur
	* @param <Attribute> $port
	* @return Aucun retour
	*/

	public function setPort($port){
		$this->port = $port;
	}
}
?>