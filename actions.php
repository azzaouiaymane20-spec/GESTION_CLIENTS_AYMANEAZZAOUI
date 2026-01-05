<?php
include "config.php";
$action = $_GET['action'] ?? '';

// AJOUTER
if ($action == 'ajouter' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO clients (nom, prenom, sexe, ville, loisirs) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['ville'], $_POST['loisirs']]);
    
    header("Location: liste.php");
    exit();
}

// SUPPRIMER
if ($action == 'supprimer' && isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM clients WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    header("Location: liste.php");
    exit();
}
?>