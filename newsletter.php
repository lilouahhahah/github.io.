<!DOCTYPE html>
<html lang="fr">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>home</title>
     <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css">
     <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<?php
    echo $_POST["prenom"];
    echo $_POST["nom"];
    echo $_POST["email"];
    echo $_POST["date"];
    echo $_POST["note"];
    echo "<p>Merci de votre abonnement au Newsletter</p>"
?>
</body>
</html>