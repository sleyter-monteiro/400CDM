<?php  require_once 'inc/log_bdd.php'; ?>
<?php require_once 'inc/fonction.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>400 Coups de Main</title>
        <!-- Favicon-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">  
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php require_once 'inc/navbar.php'; ?>


        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php

$annonce = $pdoLOG->query ( "SELECT * FROM annonces ORDER BY id_annonce DESC LIMIT 8; ");

while($reserve = $annonce->fetch(PDO::FETCH_ASSOC)) {
  echo "<div class=\"col mb-5\">";
              echo "<div class=\"card shadow-sm\">";
              echo "<img src=\"$reserve[photo]\" alt=\"photo d'annonce\">";

              echo "<div class=\"card-body\">";
                echo "<p class=\"card-title\"> ".$reserve['titre']. "</p>";
                echo "<p class=\"card-text\">Type d'annonce : " .$reserve['type_de_cdm']. "</p>";
                echo "<p class=\"card-text\">Categorie : ".$reserve['categorie']. "</p>";
                echo "<div class=\"d-flex justify-content-between align-items-center\">";
                echo "<div class=\"btn-group\">";


                  echo "<a href=\"fiche_annonce.php\" class=\"btn btn-info\">Détails</a>";
                echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        }
      ?>
                   
                </div>
            </div>
        </section>
        <?php require_once 'inc/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/script.js"></script>
    </body>
</html>

