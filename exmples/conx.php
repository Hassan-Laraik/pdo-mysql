<?php
try
{
	$mysqlClient = new PDO(
	'mysql:host=localhost;dbname=tsge;charset=utf8',
	'root',
	'12345678'
);
echo "Connected";
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
$formateurStatement = $mysqlClient->prepare('SELECT * FROM formateurs');
?>

<?php
$formateurStatement->execute();
$formateurs = $formateurStatement->fetchAll();
?>

<?php
// On affiche chaque recette une à une
foreach ($formateurs as $formateur) {
?>
    <p><?php echo $formateur['nom_Complet']; ?></p>
<?php
}
?>