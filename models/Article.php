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

//        $sql = "SELECT * FROM ".$this->table." WHERE `slug`='".$slug."'";
//        $query = $this->_connexion->prepare($sql);
//        $query->execute();
//        return $query->fetch(PDO::FETCH_ASSOC);
    }

}