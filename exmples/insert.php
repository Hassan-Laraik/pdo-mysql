<?php
try {
$mysqlClient =
 new PDO('mysql:host=localhost;dbname=tsge;charset=utf8',
             'root', 
             '12345678');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO formateurs
/*(title, recipe, author, is_enabled)*/
 VALUES (null, :nom_Complet, :gsm, :specialite)';

// Préparation
$insertFormateur = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertFormateur->execute([
    'nom_Complet' => 'Ben Moden	Ali',
    'gsm' => '6663332222',
    'specialite' => "Gestion",
]);

echo "Operation insert effectuée";
?>