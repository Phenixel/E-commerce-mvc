<?php

abstract class Model{
    private string $host = host;
    private string $db_name = db_name;
    private string $username = username;
    private string $password = password;

    protected $_connexion;

    public $table;
    public $id;

    /**
     * Fonction d'initialisation de la base de données
     *
     * @return void
     */
    public function getConnection(): void
    {
        $this->_connexion = null;

        $host = $this->host;
        $db_name = $this->db_name;
        $username = $this->username;
        $password = $this->password;
        try{
            $this->_connexion = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
            $this->_connexion->exec("set names utf8");
            $this->_connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        }catch(PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }

    /**
     * Méthode permettant de simplifier le texte entré en paramétrés pour donner une version slugifier
     *
     * @param $text
     * @return string
     */
    public function slugify($text): string
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $text);
        return $slug;
    }

    /**
     * Méthode permettant d'obtenir un enregistrement de la table choisie en fonction d'un id
     *
     * @return void
     */
    public function getOne(){
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();    
    }

    /**
     * Méthode permettant d'obtenir tous les enregistrements de la table choisie
     *
     * @return void
     */
    public function getAll(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}