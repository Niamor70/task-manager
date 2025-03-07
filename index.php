<?php
// traitement de la suppression
if ( isset($_POST['del']) && !empty($_POST['del']) ) {
    if (is_file($_POST['del'])) {
        unlink($_POST['del']);
    }
    header('Location: index.php');
}

// traitement du formulaire d'ajout d'une tâche
if ( isset($_POST['task']) && !empty($_POST['task']) ) {
    $filename = 'tasks/'.time().'.txt';

    /*
    // méthode 1 avec fwrite
    if (!$fp = fopen($filename, 'a')) {
        echo "Cannot open file ($filename)";
        exit;
    }
    if (fwrite($fp, $_POST['task']) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }

    fclose($fp);
    */

    // methode 2 avec file_put_contents
    file_put_contents($filename, $_POST['task']);

    header('Location: index.php');
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    Tâche : <input type="text" name="task"><br>
    <input type="submit" value="Ajouter une tâche">
</form>

<?php

foreach (glob("tasks/*.txt") as $filename) {
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    echo '<div>';
    $time = explode("/", $filename);
    echo date("d/m/Y H:i:s", intval($time[1])).' : ';
    //echo '01/01/2025 00:00 : ';
    echo $contents;
    // lien de suppression avec methode GET
    //echo '<a href="index.php?del='.$filename.'">supprimer</a>';
    // suppression avec un formulaire et methode POST
    echo '<form action="index.php" method="post">
<input type="hidden" value="'.$filename.'" name="del">
<input type="submit" value="supprimer">
</form>';
    echo '</div>';
}

?>

</body>
</html>