<?php
session_start();

// Vérifier que l'article existe dans le panier
if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
}

// Rediriger l'utilisateur vers la page du panier
header('Location: ' . BASE_DIR . '/paniers');
exit;
