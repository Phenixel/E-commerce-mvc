<?php

class Utilisateur extends Model{
    public function __construct()
    {
        $this->table = "utilisateur";
        $this->getConnection();
    }

    public function getConnect(string $email, string $pwd){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM ". $this->table ." where email = :email and password = :pwd");
        $stmt->BindValue(":email", $email, PDO::PARAM_STR);
        $stmt->BindValue(":pwd", $pwd, PDO::PARAM_STR);
        $stmt->execute();

        // Si la requête a renvoyé au moins un résultat, on renvoie les informations de l'utilisateur
        // Sinon, on renvoie null
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function createUser(string $name, string $email, string $pwd){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("INSERT INTO ". $this->table ." (name, email, password, power) VALUES (:name,:email,:pwd, 'user')");
        $stmt->BindValue(":email", $email, PDO::PARAM_STR);
        $stmt->BindValue(":name", $name, PDO::PARAM_STR);
        $stmt->BindValue(":pwd", $pwd, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function ifEmailExist(string $email){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT email FROM ". $this->table ." where email = :email");
        $stmt->BindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

}