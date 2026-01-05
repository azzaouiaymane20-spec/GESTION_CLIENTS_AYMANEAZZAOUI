<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light d-block"> <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-white">Répertoire des Clients</h2>
        <a href="index.php" class="btn btn-success"> + Ajouter un client</a>
    </div>

    <div class="table-responsive bg-white p-4 shadow rounded">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Ville</th>
                    <th>Loisirs</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM clients");
                while ($c = $stmt->fetch()) {
                    echo "<tr>
                        <td>{$c['nom']}</td>
                        <td>{$c['prenom']}</td>
                        <td>{$c['sexe']}</td>
                        <td>{$c['ville']}</td>
                        <td>{$c['loisirs']}</td>
                        <td>
                            <a href='modifier.php?id={$c['id']}' class='btn btn-sm btn-warning'>Modifier</a>
                            <a href='actions.php?action=supprimer&id={$c['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Supprimer ?\")'>Supprimer</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>