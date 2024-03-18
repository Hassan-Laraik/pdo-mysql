<?php
  include "conx.php";
  if (!empty($_POST['code'])) {
    $code = $_POST['code'];
    $sqlQuery = 'SELECT * FROM formateurs WHERE code = :code';
    $all_Formateur = $mysqlClient->prepare($sqlQuery);
    $all_Formateur->execute([
        'code' => $code
    ]);

  }else{
    $sqlQuery = 'SELECT * FROM formateurs ';
    $all_Formateur = $mysqlClient->prepare($sqlQuery);
    $all_Formateur->execute();
  }

// Exécution ! La recette est maintenant en base de données

$fetch_All_Formateur = $all_Formateur->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Chercher Votre Formateur</h3>
    
    <form action="#" method="post">
        <input type="text" name="code" > 
        <input type="submit" value="Rchercher">
    </form>
   
    <hr>
<table width=100% border=1>
      <tr>
        <td>CODE</td>
        <td>NOM COMPLET</td>
        <td>GSM</td>
        <td>SPECIALITE</td>
      </tr>  
<?php
foreach ($fetch_All_Formateur as $formateur)
{
?>
 <tr> 
<td><?php echo $formateur['code'];?></td>
<td><?php echo $formateur['nom_Complet'];?></td>
<td><?php echo $formateur['gsm'];?></td>
<td><?php echo $formateur['specialite'];?></td>    
</tr>
<?php  
}
?>
    </table>
    <?php
      echo '<h5>'.count($fetch_All_Formateur).' Trouvé </h5>';
    ?>  
</body>
</html>