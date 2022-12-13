<?php
class Pannier extends Model{

    public function __construct()
    {
        $this->table = "pannier";
        $this->getConnection();
    }

}