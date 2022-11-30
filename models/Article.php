<?php
class Article extends Model{

    public function __construct()
    {
        $this->table = "articles";
        $this->getConnection();
    }

    /**
     * Retourne un article en fonction de son slug
     *
     * @param string $slug
     * @return void
     */
    public function findBySlug(string $slug){
        $sql = "SELECT * FROM ".$this->table." WHERE `slug`='".$slug."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);    
    }

}