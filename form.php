<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$nomMess = "";
if(isset($_POST['nom'])){

    $nom = $_POST['nom'];
    if(preg_match("/[!\"#$%&'()*+,.\/:;<=>?@\^_`{|}~]/",$nom)){
        $nomMess = "<p>Le nom doit contenir unniquement des lettre mini ou maj</p>";
    }

    // $prenom = $_POST['prenom'];
    // $adresse = $_POST['adresse'];
    // $pays = $_POST['mdp'];
    // $signature = $_POST['signature'];
    // $genre = $_POST['genre'];
    
    echo $nom;
}

echo "<form action='form.php' method='POST'>";
// <form action='form.php' method='POST'>
    echo "<input type='text' name='nom'>";
    if($nomMess){
        echo $nomMess;
    }
    // <input type='text' name='prenom'>
    // <input type='text' name='adresse'>
    // <input type='text' name='pays'>
    // <input type='password' name='mdp'>
    // <input type='text' name='signature'>
    // <input type='text' name='genre'>
    echo "<button type='submit'>Envoyer</button>";
echo "</form>";

?>
</body>

</html>