<?php
session_start();

if(isset($_POST['articleId'])){
    $articleId = $_POST['articleId'];
    if(!in_array($articleId, $_SESSION['cart'])){
        array_push($_SESSION['cart'], $articleId);
    }
}
