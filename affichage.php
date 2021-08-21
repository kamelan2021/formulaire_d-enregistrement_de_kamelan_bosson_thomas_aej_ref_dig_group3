<?php
    require_once 'connexion.php';
    $query = $db->query('SELECT * FROM formes');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="affichage.css">
        <title>affichage</title>
    </head>

<body>
    <h1>la liste des inscrits</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Numéro AEJ</th>
                <th>Téléphone</th>
                <th>Fonction</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>    
        <tbody>
            <?php while($data = $query->fetch()): ?>
                <tr>
                    <td> <?= $data['id'];?> </td>
                    <td> <?= $data['nom'];?> </td>
                    <td> <?= $data['prenom'];?> </td>
                    <td> <?= $data['email'];?> </td>
                    <td> <?= $data['numero_aej'];?> </td>
                    <td> <?= $data['telephone'];?> </td>
                    <td> <?= $data['fonction'];?> </td>
                    <td> <?= $data['date_d\'inscription'];?> </td>
                </tr>
            <?php endwhile ;?>
        </tbody>
    </table>
    <p><a href="index.php" title="Aller à la page d'inscription"> à la page d'inscription</a></p>
</body>
</html>
    