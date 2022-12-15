<?php
    require 'header.php';
    ?>

<body>
    

    <div class="container">
        <div style="text-align: center">
            <ul>
                <li><a href="#" id="Tous">Tous</a></li>
                <li><a href="#" id="Mobile">Mobile</a></li>
                <li><a href="#" id="Web">Web</a></li>
                <li><a href="#" id="intercation">Interaction</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="container">
        <form method="POST">
                <?php
                    require 'sqlconnect.php';

                    $sql = 'SELECT * 
                        FROM projet, categorie 
                        WHERE projet.id_categorie=categorie.id_categorie
                        /*AND projet.id_categorie=1;*/
                    
                    ';
                    echo "<div class=\"row\">";
                    $table = $connection->query($sql);
                    while ($ligne = $table->fetch()) {
                            $title = $ligne['projet_title'];
                            $annee = $ligne['projet_annee'];

                            
                                echo "<div class=\"col-4\">";

                                    echo "<div class=\"card\" style=\"width: 18rem;\">";
                                        echo '<img class=\"card-img-top\" src="'.$ligne["projet_photo"].'"/>';
                                        echo "<div class=\"card-body\">";
                                            echo "<p class=\"card-text\">".$ligne["projet_type"]."</p>";
                                            echo "<div class=\"card-title row\">";

                                                echo "<div class=\"col-8\" style=\"font-weight: bold\">".$ligne["projet_title"];
                                                echo "</div>";

                                                echo "<div class=\"col-4\" style=\"font-weight: bold\">".$ligne["projet_annee"];
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                            echo "</div>";
                    
                    }
                ?>
        </form>
    </div>
    

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-6">
                <img src="assets\images\undraw_Designer_by46.svg"/>
            </div>
            <div class="col-6">
                <h2>À PROPOS...</h2>
                <h1>QUI SUIS-JE ?</h1>
                <br>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac mattis nisi, gravida iaculis magna. 
                Quisque tincidunt fermentum nunc ut efficitur. Aliquam sapien velit, congue sit amet convallis a, mollis 
                at ligula. Aenean ultrices laoreet leo, eget mattis sem venenatis vitae. Cras feugiat aliquet quam, id 
                rhoncus dui dictum id. Aliquam eros dui, vulputate et neque quis, tempor condimentum turpis. Nunc erat arcu, 
                volutpat at libero pretium, aliquet consequat sem.                
                </p>
                <button type="button" class="rounded-pill bouton_contact"><a href="#"style="color:white">CONTACT</a></button>
            </div>       
        </div>
    </div>
    
    <div class="container" style="margin-top: 100px; text-align:center; background-color:rgb(44, 44, 44);">
    <!--Récupération description commentaire-->
    <p id="blog">
        <?php
            require 'sqlconnect.php';

            $sql = 'SELECT * 
                FROM commentaire 
                /*AND projet.id_categorie=1;*/
            ';
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                echo $ligne["commentaire_description"];                    
            }
        ?>
    </p>
        
    </div>
    <div style="text-align: center">
        <img class ="img_blog"src="assets\images\lena.jpg"/>

        <!--Récupération Nom auteur-->
        <p style="font-weight:bold">
        <?php
            require 'sqlconnect.php';

            $sql = 'SELECT * 
                FROM commentaire 
            ';
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                echo $ligne["commentaire_nom"];                    
            }
        ?>
        </p>

        <!--Récupération profession auteur-->
        <p id="profession_commentaire" style="font-style: italic;">
        <?php
            require 'sqlconnect.php';

            $sql = 'SELECT * 
                FROM commentaire 
            ';
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                echo $ligne["commentaire_profession"];                    
            }
        ?>
        </p>
        <div style="margin-top: -15px">
            <!--Changer juste checked par not_checked pour enelever une étoile-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star not_checked"></span>
            <span class="fa fa-star not_checked"></span>
        </div>
    </div>
</body>
</html>