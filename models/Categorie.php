<?php
class Categorie extends Model{

    public function __construct()
    {
        $this->table = "categorie";
        $this->getConnection();
    }

    public function findByName(string $nom){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM " . $this->table ." WHERE nom = :nom");
        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getArticleFromCategorie(int $id){
        $this->getConnection();

        $stmt = $this->_connexion->prepare("SELECT a.id, a.slug, a.nom, a.content, a.description, a.images, a.prix, c.nom as categorie FROM article as a INNER JOIN categorie as c ON a.idCategorie = c.id WHERE c.id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}