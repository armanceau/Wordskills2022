

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordskills 2022</title>
</head>
<body>
<?php
    require 'sqlconnect.php';

    $sql = 'SELECT * FROM projet';
    $table = $connection->query($sql);
    while ($ligne = $table->fetch()) {
            $title = $ligne['projet_title'];
            $annee = $ligne['projet_annee'];
            echo $ligne["projet_title"]."<br/>";
            echo $ligne["projet_type"]."<br/>";
            echo $ligne["projet_annee"]."<br/>";
    
    }
?>
</body>
</html>