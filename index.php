<?php 
//voir si l'utilisateur a clické sur le bouton Envoyer
    if(isset($_POST['envoyer'])){
        //forcer l'utilisateur à envoyer des champ tout remplir
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
            && !empty($_POST['aej']) && !empty(['telephone']) && !empty(['fonction']) ){
                /*Vérification de la validité de l'email*/ 
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    //gestion des injections des scriptes dans les champs
                    $email = htmlentities($_POST['email']);
                    $nom = htmlspecialchars($_POST['nom']);
                    $prenom = htmlentities($_POST['prenom']);
                    $aej = htmlentities($_POST['aej']);
                    $tel = htmlspecialchars($_POST['telephone']);
                    $fonction = htmlentities($_POST['fonction']);
                    // inclusion de mon fichier de connexion à la base de donnée
                    require_once 'connexion.php';
                    //préparation de la requete
                    $query = $db->prepare('INSERT INTO formes VALUES(null,:nom, :prenom,:email,:aej,:telephone,:fonction, null)');
                    //liaison des marqueurs aux valeurs
                    $query->bindValue(':nom', $nom);
                    $query->bindValue(':prenom', $prenom);
                    $query->bindValue(':email', $email);
                    $query->bindValue(':aej', $aej);
                    $query->bindValue(':telephone', $tel);
                    $query->bindValue(':fonction', $fonction);
                    //execution de la requete
                    $insertionreussir = $query->execute();
                }else{
                    $error_email = "Vous n'avez pas entré d'email valide ";
                }
        }else{
                $indication = "Veillez remplir tous les champs";
            }
    }
    if(isset($_POST['afficher'])){
        header('Location:affichage.php');
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Un formulaire dynamique">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="entete">
        <h1>Page d'inscription</h1>
        <!--dire à l'utilisateure que tous les champs sont requis -->
            <?php if(isset($indication)):?>
                <h2><?= $indication;?></h2>
            <?php endif;?>
            <!--lui dire son inscription a été pris en compte -->
            <?php if(isset($insertionreussir)):?>
                <h2><?= " Votre inscription a bien réussi"?></h2>
            <?php endif;?>
            <!--lui dire qu'il doit entrer un email valide -->
            <?php if(isset($error_email)):?>
                <h2><?= $error_email; ?></h2>
            <?php endif;?>
    </div>
                <!-- le formulaire -->
        <form action="index.php" method="POST" class="form">
            <div class="form-gauche">
                <div class="nom">
                    <label for="name">Votre Nom <span>*</span></label>
                    <input type="text" name="nom" id="name" placeholder="Ecrivez ici votre nom" autofocus >
                </div>
                
                <div>
                    <label for="prenom">Votre Prénom<span>*</span></label>
                    <input type="text" name="prenom" id="prenom" placeholder="Ecrivez ici votre prénom"  >
                </div>

                <div>
                    <label for="email">Votre Email<span>*</span></label>
                    <input type="text" name="email" id="email" placeholder="Votre email ici" >
                </div>
            </div>
             
            <div class="form-droit">
                <div>
                    <label for="numero_aej">Votre Numéro AEJ<span>*</span></label>
                    <input type="text" name="aej" id="numero_aej" placeholder="Numéro AEJ ici" >
                </div>
                    
                <div>
                    <label for="tel">Votre numéro de Téléphone<span>*</span></label>
                    <input type="tel" name="telephone" id="tel" placeholder="Numero de telephone ici" maxlength="10" >
                </div>
                    
                <div>
                    <label for="fonction">Choisissez votre fonction<span>*</span></label>
                    <select name="fonction" id="fonction">
                        <option value="Développeur Web et Mobile">Développeur Web et Mobile</option>
                        <option value="Développeur Data IA">Développeur Data IA</option>
                        <option value="Referent Digital">Referent Digital</option>
                    </select>
                </div>
            </div>
            <button class="envoye" type="submit" name="envoyer">Envoyer</button>
            <button class="affiche" type="submit" name="afficher">Voir les inscrits</button>
        </form>

</body>
</html>


