<?php
class Article extends Model{

    public function __construct()
    {
        $this->table = "article";
        $this->getConnection();
    }

    /**
     * Retourne un article en fonction de son slug
     *
     * @param string $slug
     * @return void
     */
    public function findBySlug(string $slug){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM " . $this->table ." WHERE slug = :slug");
        $stmt->bindValue(':slug', $slug, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getArticleWithCategorie(){
        $this->getConnection();

        $stmt = $this->_connexion->prepare("SELECT a.id, a.slug, a.nom, a.content, a.description, a.images, a.prix, c.nom as categorie, c.id as idCat FROM article as a INNER JOIN categorie as c ON a.idCategorie = c.id");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getThreeArticles(){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT * FROM ". $this->table ." LIMIT 3");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getArticlesByCategoryId(int $categoryId) {
        $this->getConnection();
        $stmt = $this->_connexion->prepare("SELECT a.id, a.slug, a.nom, a.content, a.description, a.images, a.prix, c.nom as categorie, c.id as idCat FROM article as a INNER JOIN categorie as c ON a.idCategorie = c.id WHERE c.id = :categoryId");
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}