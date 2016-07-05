<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

require_once 'Autoloader.php';
Autoloader::register();

$posts = \App\tables\Posts::getAllPosts();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenue sur MaVente</title>
    </head>
    <body>
        Liste des posts :
        <table>
            <?php
            
            echo ROOT;
            
            if (count($posts) === 0) {
                echo '<tr>';
                echo '<td>Aucune donnée</td>';
                echo '</tr>';
            } else {
                echo '<tr>';
                echo '<td>Titre</td>';
                echo '<td>Texte</td>';
                echo '<td>Utilisateur</td>';
                echo '<td>Date</td>';
                echo '<td>URL</td>';
                echo '<td>&nbsp;</td>';
                echo '<td>&nbsp;</td>';
                echo '</tr>';

                foreach ($posts as $p) {
                    echo '<tr>';
                    echo '<td>' . $p->getTitle() . '</td>';
                    echo '<td>' . $p->getContent() . '</td>';
                    echo '<td>' . $p->getUser() . '</td>';
                    echo '<td>' . $p->getDate() . '</td>';
                    echo '<td>' . $p->getUrl() . '</td>';
                    echo '<td>Modifier</td>';
                    echo '<td>Supprimer</td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>
    </body>
</html>
