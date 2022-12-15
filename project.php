
<?php
    require 'header.php';
    require 'sqlconnect.php';
?>

<body>
    
    <div>
        <ul>
            <li><a href="#" id="tous">Tous</a></li>
            <li><a href="#" id="tous" >Mobile</a></li>
            <div id ="mobile"></div>
            

            <li><a href="#" id="web" onclick="web()">Web</a></li>



            <li>Interacton</li>
        </ul>
    </div>
    <form method="POSTE" action="getType.php">
        <?php
            

            
        ?>
    </form>

    <script>
            function web(){
                var mobile = document.getElementById('mobile');
                mobile.innerHTML = "<?= 
                        $sql = 'SELECT * FROM projet where projet_type=\'Web\'';
                        $table = $connection->query($sql);
                        while ($ligne = $table->fetch()) {
                                $title = $ligne['projet_title'];
                                $annee = $ligne['projet_annee'];
                                echo $ligne["projet_title"]."<br/>";
                                echo $ligne["projet_type"]."<br/>";
                                echo $ligne["projet_annee"]."<br/>";
                        
                        }
                    ?>";
            }
            
            </script>
</body>
</html>