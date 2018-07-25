<?php
  
  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;

    public  $bdd;

    public function connexion() {
      // constructeur 
      $this->host     = 'localhost';
      $this->dbname   = 'form';
      $this->login    = 'root';
      $this->psw      = 'coda2018';
    }
    
    public function connect() {
      
      try { $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->psw);
        echo "pouet"; 
    } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
      $this->test();
    }

    public function test() {
      $tab = array();
      $compare = $this->bdd->query('SELECT nom,prenom,birthday FROM inputs WHERE nom="{$nom}" AND prenom="{$prenom}" AND birthday="{$birthday}" ');
      if (isset ($_GET['envoyer'])){
      $nom=$_GET['nom'];
      $prenom=$_GET['prenom'];
      $birthday=$_GET['birthday'];
      array_push($tab, "$nom", "$prenom", "$birthday");
      
      
      // var_dump($tab);
      var_dump($compare);
      // foreach (;
      // $this->bdd->query("INSERT INTO inputs (nom,prenom,birthday) VALUES('$nom','$prenom','$birthday')");
        
      }
        
    }

  }

  ?>