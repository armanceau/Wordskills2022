
<?php
    require 'header.php';
?>

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