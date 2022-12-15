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
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <?php
                require 'sqlconnect.php';

                $sql = 'SELECT * 
                    FROM projet, categorie 
                    WHERE projet.id_categorie=categorie.id_categorie
                    /*AND projet.id_categorie=1;*/
                
                ';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                        $title = $ligne['projet_title'];
                        $annee = $ligne['projet_annee'];
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
                        echo "</br>";
                
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
                <button type="button" class="btn btn-dark rounded-pill bouton_contact">Contact</button>
            </div>
            
        </div>
        
        
        

    </div>
    
</body>
</html>