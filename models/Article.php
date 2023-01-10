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
     * @return Article
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

        $stmt = $this->_connexion->prepare("SELECT a.id, a.slug, a.nom, a.content, a.description, a.images, a.prix, c.nom as categorie, c.id as idCat FROM ". $this->table ." as a INNER JOIN categorie as c ON a.idCategorie = c.id");
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
        $stmt = $this->_connexion->prepare("SELECT a.id, a.slug, a.nom, a.content, a.description, a.images, a.prix, c.nom as categorie, c.id as idCat FROM ". $this->table ." as a INNER JOIN categorie as c ON a.idCategorie = c.id WHERE c.id = :categoryId");
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNewArticle(string $nom, string $content, string $description, string $image, int $prix, int $idCategorie){
        $this->getConnection();
        $stmt = $this->_connexion->prepare("INSERT INTO ". $this->table ." (slug, nom, content, description, images, prix, idCategorie) VALUES (:slug, :nom, :content, :description, :images, :prix, :idCategorie)");
        $stmt->bindValue(':slug', $this->slugify($nom), PDO::PARAM_STR);
        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':images', $image, PDO::PARAM_STR);
        $stmt->bindValue(':prix', $prix, PDO::PARAM_INT);
        $stmt->bindValue(':idCategorie', $idCategorie, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deleteArticle(int $id) {
        $this->getConnection();
        $stmt = $this->_connexion->prepare("DELETE FROM ". $this->table ." WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        try {
            $deleteSuccess = $stmt->execute();
            if($stmt->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}