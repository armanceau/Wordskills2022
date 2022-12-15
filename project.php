
<?php
    require 'header.php';
?>

<body>
    

    <div class="container">
        <div style="text-align: center">
            <ul>
                <li><a href="#">Tous</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Web</a></li>
                <li><a href="#">Interaction</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="container">
        <?php
            require 'sqlconnect.php';

            $sql = 'SELECT * 
                FROM projet, categorie 
                WHERE projet.id_categorie=categorie.id_categorie
                AND projet.id_categorie=1;
            
            ';
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                    $title = $ligne['projet_title'];
                    $annee = $ligne['projet_annee'];
                    echo "<div class=\"col-3\">";
                    echo $ligne["projet_title"]."<br/>";
                    echo $ligne["projet_type"]."<br/>";
                    echo $ligne["projet_annee"]."<br/>";
                    echo '<img src="'.$ligne["projet_photo"].'" />';
                    echo "</div>";
                    echo "</br>";
            
            }
        ?>
    </div>
    
</body>
</html>