<?php
 include "conx.php";
?>

<?php
 if (isset($_POST['code'])) {
   $code = $_POST['code'];
 }
if (empty($_POST['code'])) {
    //echo "impossible d'effectuer cet operation";
    //die();
    $_POST['code'] = '';
 }
if (isset($_POST['nom_complet'])) {
    $nom_complet = $_POST['nom_complet'];
  }
if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
  }
if (isset($_POST['specialite'])) {
    $specialite = $_POST['specialite'];
  }   
?>

<?php
// Ecriture de la requête
$sqlQuery = 'INSERT INTO formateurs
 VALUES (:code, :nom_Complet, :gsm, :specialite)';

// Préparation
$insertFormateur = $mysqlClient->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertFormateur->execute([
    'code' => $code,
    'nom_Complet' => $nom_complet,
    'gsm' => $tel,
    'specialite' =>$specialite,
]);
?>
