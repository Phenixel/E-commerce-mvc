<?php
session_start();

class Panier extends Model{

    public function __construct(){
        $this->table = "article";
        $this->getConnection();
    }

    public function getThreeArticles(){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM article WHERE id IN (".implode(',',$_SESSION['cart']).")");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}