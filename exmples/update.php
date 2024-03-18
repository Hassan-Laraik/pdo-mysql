<?php
if (isset($_POST['code'])) {$code = $_POST['code']; }

    if(empty($_POST['code'])){
        header('Location:http://'.$_SERVER['SERVER_NAME'].'/pdo_project/Formulaire_update.php');
        die();
        
    }else{
        $code = $_POST['code'];
    }
    
if (isset($_POST['nom_complet'])) {$nom_complet = $_POST['nom_complet']; }#
if (isset($_POST['tel'])) {$tel = $_POST['tel']; }#
if (isset($_POST['specialite'])) {$spaecialite = $_POST['specialite']; }#}


try {
$mysqlClient =
 new PDO('mysql:host=localhost;dbname=tsge;charset=utf8', 'root', '12345678');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'Update formateurs 
             set nom_Complet =:nom_Complet,
             gsm=:gsm,
             specialite =:specialite
             where code =:code ';
/*(title, recipe, author, is_enabled)*/
 //VALUES (null, :nom_Complet, :gsm, :specialite)';

// Préparation
$insertFormateur = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertFormateur->execute([
    'code'=> $code,
    'nom_Complet' => $nom_complet,
    'gsm' => $tel,
    'specialite' => $spaecialite,
]);

echo "Operation Update effectué effectuée";
?>