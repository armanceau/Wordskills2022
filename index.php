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

    <div class="container" id="projet">
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

                                    echo "<div class=\"card\" style=\"width: 25rem;\">";
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
                                    echo "<br>";
                            echo "</div>";
                    
                    }
                ?>
        </form>
    </div>
    

    <div class="container" style="margin-top: 100px" id="apropos">
        <div class="row">
            <div class="col-6">
                <img src="assets\images\undraw_Designer_by46.svg"/>
            </div>
            <div class="col-6">
                <h2>À PROPOS...</h2>
                <h1>QUI SUIS-JE ?</h1>
                <br>
                <p style="color: gray;">
                <!--Récupération description a propos-->
                <?php
                    require 'sqlconnect.php';

                    $sql = 'SELECT * 
                        FROM apropos 
                    ';
                    $table = $connection->query($sql);
                    while ($ligne = $table->fetch()) {
                        echo $ligne["apropos_description"];                    
                    }
                ?>               
                </p>
                <button type="button" id="open" class="rounded-pill bouton_contact">CONTACT</button>
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

    <div class="container" style="margin-top: 100px" id="blog">
        <div >
                <h2 style="text-align: center; color:rgb(44, 44, 44);" >MON BLOG</h2>
                <p style="color: gray; text-align: center;">
                    Mes avis sur les derenières tendances du Web 
                </p>
                <br>
                <br>
                <!--Récupération card blog-->
                <?php
                    require 'sqlconnect.php';

                    $sql = 'SELECT * 
                        FROM article
                        ORDER BY article_date DESC LIMIT 3

                    ';
                    echo "<div class=\"row\">";
                    $table = $connection->query($sql);
                    while ($ligne = $table->fetch()) {
                                echo "<div class=\"col-4\">";
                                    echo "<div class=\"card\" style=\"width: 25em;\">";
                                    echo "<h7 class=\"card-header\" style=\"background-color: rgb(44, 44, 44); color:white;\">".$ligne["article_date"]."</h7>";
                                        echo '<img class=\"card-img-top\" src="'.$ligne["article_image"].'"/>';
                                        echo "<div class=\"card-body\">";
                                            echo "<div class=\"card-title row\">";

                                                echo "<div style=\"font-weight: bold\">".$ligne["article_title"];
                                                echo "</div>";
                                                echo "<br>";
                                                echo "<br>";
                                                echo "<div>".$ligne["article_description"];
                                                echo "</div>";
                                            echo "</div>";
                                            echo "<br>";
                                            echo '<button type="button" class="rounded-pill bouton_lire">LIRE</button>';
                                        echo "</div>";
                                    echo "</div>";
                            echo "</div>";
                    
                    }  ?>           
    </div>

    <div class="popup" id="popup">
        <form class="container" id="container">
            <div class="row" id="row">
                <div class="col-6" style="background-color: white;padding-bottom: 15px; color:black">
                    <div style="margin-left:20px;">
                        <h2 style="margin-top:10px; color:black">CONTACT</h2>
                        <h4 style="font-size: 15px;color:black ">APPELEZ-MOI OU ENVOYEZ-MOI UN MAIL</h4>
                        <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg> 01 02 03 04 05
                        <br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg> designer@ui43.com
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-10">
                                <form>
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-size: 12px;font-weight: bold">Adresse e-mail</label>
                                    <input type="email" name="mail" id="Mail" class="form-control rounded-pill" style="font-size: 10px; border-color: grey" placeholder="Adresse e-mail" onfocusout="verifMail()">
                                    <div id ="erreurMail"></div>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label" style="font-size: 12px;font-weight: bold">Contenu</label>
                                    <textarea name="contenu" id="Contenu" class="rounded" style="width:355px;height:250px;font-size: 10px;border-color: grey" placeholder="Contenu" onfocusout="verifContenu()"></textarea>
                                    <div id ="erreurContenu"></div>
                                    </div>
                                    <button type="submit" disabled="true" id="button1" class="btn btn-dark rounded-pill" style="margin-left: 265px;">ENVOYER</button>
                                </form>
                            </div>
                            <div class="col-2"></div>
                            
                        </div>
                    </div>
                    
                    
                </div>

                <div class="col-6" id="image_popup" style="margin-left:-15px">
                    <svg class="close" id="close" xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 34 39" style="margin-left:420px; margin-top:10px;">
                        <g id="button_white" transform="translate(-853 -11)">
                        <text id="close" transform="translate(870 44)" fill="#fff" font-size="39" font-family="FontAwesome" letter-spacing="0.05em"><tspan x="-16.714" y="0"></tspan></text>
                        </g>
                    </svg>
                </div>
            </div> 
        
        </form>
        
    </div>



</body>
<?php
require "footer.php";
?>
</html>
