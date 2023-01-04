<?php

class Panier extends Model{

    public function __construct(){
        $this->table = "article";
        $this->getConnection();
    }

    public function getCartArticles(){
        $ids = array_keys($_SESSION['cart']);
        $idsString = implode(',', $ids);

        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM ". $this->table ." WHERE id IN (". $idsString .")");
//        $stmt = $this->_connexion->prepare('SELECT * FROM article WHERE id IN (:idsString)');
//        $stmt->bindValue(':idsString', $idsString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}