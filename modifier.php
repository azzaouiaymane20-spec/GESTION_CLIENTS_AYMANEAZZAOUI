<?php
include "config.php";
$id = $_GET['id'];

// Récupérer les données actuelles
$stmt = $pdo->prepare("SELECT * FROM clients WHERE id = ?");
$stmt->execute([$id]);
$c = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "UPDATE clients SET nom=?, prenom=?, sexe=?, ville=?, loisirs=? WHERE id=?";
    $pdo->prepare($sql)->execute([$_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['ville'], $_POST['loisirs'], $id]);
    header("Location: liste.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Modifier Client</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto shadow" style="max-width: 500px;">
            <div class="card-body">
                <h3>Modifier le client</h3>
                <form method="POST">
                    <input type="text" name="nom" value="<?= $c['nom'] ?>" class="form-control mb-2" required>
                    <input type="text" name="prenom" value="<?= $c['prenom'] ?>" class="form-control mb-2" required>
                    <select name="sexe" class="form-select mb-2">
                        <option value="Homme" <?= $c['sexe'] == 'Homme' ? 'selected' : '' ?>>Homme</option>
                        <option value="Femme" <?= $c['sexe'] == 'Femme' ? 'selected' : '' ?>>Femme</option>
                    </select>
                    <input type="text" name="ville" value="<?= $c['ville'] ?>" class="form-control mb-2" required>
                    
                    <label>Loisirs :</label>
                    <select name="loisirs" class="form-select mb-3">
                        <option value="Sport">Sport</option>
                        <option value="Lecture">Lecture</option>
                        <option value="Voyage">Voyage</option>
                        <option value="Films">Films</option>
                    </select>
                    <button  class="btn btn-success w-100">Mettre à jour</button>
                    <a href="liste.php" class="btn btn-secondary w-100 mt-2">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>