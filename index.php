<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-3">
    <div class="form-box mx-auto">
        <h3 class="text-center">Nouveau Client</h3>
        <form name="f" method="POST" action="actions.php?action=ajouter" onsubmit="return verifier()">
            <label>Nom :</label>
            <input type="text" name="nom" class="form-control mb-2">

            <label>Prénom :</label>
            <input type="text" name="prenom" class="form-control mb-2">

            <label>Sexe :</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sexe" value="Homme" checked> Homme &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="sexe" value="Femme"> Femme <br><br>

            <label>Ville :</label>
            <input type="text" name="ville" class="form-control mb-2">

            <label>Loisirs :</label>
            <select name="loisirs" class="form-select mb-3">
                <option value="Sport">Sport</option>
                <option value="Lecture">Lecture</option>
                <option value="Voyage">Voyage</option>
                <option value="Films">Films</option>
            </select>

            <button type="submit" class="btn btn-primary w-100 mb-2">Ajouter un client</button>
            
            <a href="liste.php" class="btn btn-outline-light w-100">Consulter la liste</a>
        </form>
    </div>
</div>

<script>
function verifier() {
    if (document.f.nom.value == "" || document.f.prenom.value == "" || document.f.ville.value == "") {
        alert("Tous les champs sont obligatoires !");
        return false;
    }
}
</script>
</body>
</html>