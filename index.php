<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 'include ./modeles/modeleCours.php'; ?>
        <h1> Projet GIT ISFCE DVPWEB</h1>
        <p> lundi 19-12-2016 </p>
        
        <h3>Liste des cours de l'ISFCE</h3>
        
        <?php
        switch ($_GET["page"]) {
            case 'liste_cours':
                $cours = get_liste_cours();
                include './vues/listeCours.php';
                break;
        }
        ?>
    </body>
</html>