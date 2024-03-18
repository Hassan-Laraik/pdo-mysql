<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulaire  update Formateur</h3>
    <form action="insert_formateur.php" method="post">
        <h4>Code</h4>
        <input type="text" name="code" id="">
        <h4>Nom nom_Complet</h4>
        <input type="text" name="nom_complet" id="">
        <h4>gsm</h4>
        <input type="tel" name="tel" id="">
        <h4>Specialité</h4>
        <select name="specialite" id="s">
            <option value="Gestion">Gestion</option>
            <option value="Informatique">Informatique</option>
            <option value="Soft_Skills">Soft Skills</option>
            <option value="IA">IA</option>
            <option value="Hotelerie">Hotelerie</option>
        </select>
        <hr>
        <input type="submit" value="Valider">
    </form>
</body>
</html>