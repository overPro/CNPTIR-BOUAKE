<?php
// connexion
$con = new PDO('mysql:host=localhost;dbname=carte_pay', 'root', '');

//redirection
if (isset($_GET['p'])) {

    $matricule = $_GET['p'];
    $_SESSION['matricule'] = $_GET['p'];

//liste des  categorie
    $req = $con->prepare('SELECT DISTINCT(categorie_produit)FROM produit WHERE code_fournisseur=:matricule');
    $req->bindParam(':matricule', $matricule);
    $req->execute();
    $result = $req->fetchAll();

//affichage des produits
    $req = $con->prepare('SELECT * FROM produit WHERE code_fournisseur=:matricule');
    $req->bindParam(':matricule', $matricule);
    $req->execute();
    $sol = $req->fetchAll();

    $req = $con->prepare("SELECT campagne.* FROM campagne, produit WHERE campagne.reference_produit=produit.reference_produit AND campagne.etat='Actif'");
    $req->execute();
    $sponsore = $req->fetchAll();
    foreach ($sponsore as $value) {
        $sponsor[] = $value['reference_produit'];
    }
}/* else{
  echo "
  <script type='text/javascript'>document.location.replace('http://localhost:81/carte/');</script>";
  exit();
  } */



// moteur de recherche
if (isset($_POST['btn_rechercher'])) {

    $req = $con->prepare('SELECT * FROM produit WHERE code_fournisseur=:matricule and categorie_produit=:categorie');
    $req->bindParam(':matricule', $_SESSION['matricule']);
    $req->bindParam(':categorie', $_POST['sai_rechercher']);
    $req->execute();
    $sol = $req->fetchAll();
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
        <!-- Begin SEO tag -->
        <title> Epencia Pay | Boutique </title>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
        <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
        <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->

        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/ecommerce/ecommerce.css">

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/tributejs/tribute.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/simplemde/simplemde.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme.min.css" data-skin="default">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme-dark.min.css" data-skin="dark">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
        <script> var skin = localStorage.getItem('skin') || 'default';
            var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');

            unusedLink.setAttribute('rel', '');
            unusedLink.setAttribute('disabled', true);
        </script><!-- END THEME STYLES -->
    </head>
    <body>
        <!-- .app -->
        <div class="app has-fullwidth">

<?php include "config/menu.php"; ?>

            <main class="app-main">
                <!-- .wrapper -->
                <div class="wrapper">
                    <!-- .page -->
                    <div class="page">

                        <!-- .page-inner -->
                        <div class="page-inner">
                            <!-- .page-title-bar -->

                            <!-- .page-section -->
                            <div class="page-section">

                                <div class="section-block">

                                    <form method="POST" action="http://localhost:81/carte/boutique.php">
                                        <!-- grid row -->
                                        <div class="row mb-4">
                                            <!-- .col -->
                                            <div class="col">
                                                <!-- .has-clearable -->
                                                <div class="has-clearable">
                                                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button> 
                                                    <select class="form-control" name="sai_rechercher">
                                                        <option>Choisir la categorie</option>
<?php
if (!empty($result)) {
    foreach ($result as $key => $value) {
        ?>
                                                                <option value="<?php echo $value['categorie_produit']; ?>"><?php echo $value['categorie_produit']; ?></option>
                                                            <?php }
                                                        } ?>
                                                    </select>
                                                </div><!-- /.has-clearable -->
                                            </div><!-- /.col -->
                                            <!-- .col-auto -->
                                            <div class="col-auto">
                                                <!-- invite members -->
                                                <div class="dropdown">
                                                    <button name="btn_rechercher" class="btn btn-primary" data-display="static" aria-haspoppup="true" aria-expanded="false"><i class="fas fa-user-plus mr-1"></i> Rechercher</button>

                                                </div><!-- /invite members -->
                                            </div><!-- /.col-auto -->
                                        </div><!-- /grid row -->


                                        <h3  class="subtitle-doc"><?php if (!empty($categorie_produit)) {
                                                            echo $categorie_produit;
                                                        } ?>

                                        </h3>

                                        <div id="code_prod2">
                                            <div class="row">
                                                <?php
                                                if (!empty($sol)) {
                                                    foreach ($sol as $key => $value) {
                                                        ?>
                                                        <div class="col-md-3">
                                                            <figure class="card card-product">
                                                                <div class="img-wrap">
                                                                    <?php if (in_array($value['reference_produit'], $sponsor)) { ?>
                                                                    <span class="ribbons" style="background-color: red; color: white!important; font-weight: bold; padding: 1%; border-radius: 4px 4px 4px 4px; margin-left: 70%"><span class="onsale ribbon">Sponsorisé</span></span>
                                                                    <?php } ?>
                                                                    <img src="http://localhost:81/carte/upload/produits/<?php echo $value['photo1_produit']; ?>">
                                                                    <a class="btn-overlay" href="http://localhost:81/carte/article.php?r=<?php echo $value['reference_produit']; ?>&m=<?php echo $value['code_fournisseur']; ?>"><i class="fa fa-search-plus"></i> Details</a>
                                                                </div>
                                                                <figcaption class="info-wrap">
                                                                    <a href="#" class="title"><?php echo $value['libelle_produit']; ?></a>
                                                                    <div class="action-wrap">
                                                                        <a href="http://localhost:81/carte/article.php?r=<?php echo $value['reference_produit']; ?>&m=<?php echo $value['code_fournisseur']; ?>" class="btn btn-primary btn-sm float-right"> Acheter </a>
                                                                        <div class="price-wrap h5">
                                                                            <span class="price-new">F <?php if (!empty($value['prix_vente'])) {
                                                            echo number_format($value['prix_vente'], 0, ',', ' ');
                                                        } ?></span>

                                                                        </div> <!-- price-wrap.// -->
                                                                    </div> <!-- action-wrap -->
                                                                </figcaption>
                                                            </figure> <!-- card // -->
                                                        </div> <!-- col // -->

                                                    <?php }
                                                } else {
                                                    ?>

                                                    <div class="page-section">
                                                        <center>              
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-12">
                                                                        <center>
                                                                            <img src="http://localhost:81/carte/upload/produits/empty-cart.png">
                                                                            <br><br>
                                                                            <div class="color-default-700 -fs-22 -b -pbxl">Votre panier est vide !</div>
                                                                            <div class="cms color-default-900 -fs-17 -pbxl">Explorez nos boutiques et découvrez nos meilleurs articles, !</div> 
                                                                            <br>
                                                                            <a href="http://localhost:81/carte/" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Commencez vos achats</a>
                                                                    </div>

                                                                </div>
                                                                </div>
                                                            </section>
                                                        </center>

                                                    </div> <!-- row.// -->

                                                </div><!-- /.page -->


<?php } ?>
                                        </div> <!-- row.// -->
                                </div> <!-- code-wrap.// -->
                            </div> <!-- row.// -->

                            <br><br>

                            </form>
                        </div>
                    </div>
                </div><!-- /.page-inner -->
        </div><!-- /.page -->
    </div><!-- /.wrapper -->
    <!-- .app-footer -->
    <footer class="app-footer">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a class="text-muted" href="#!">Support</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#!">Help Center</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#!">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#!">Terms of Service</a>
            </li>
        </ul>
        <div class="copyright"> Copyright © 2018. All right reserved. </div>
    </footer><!-- /.app-footer -->
</main><!-- /.app-main -->
</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="assets/vendor/pace/pace.min.js"></script>
<script src="assets/vendor/stacked-menu/stacked-menu.min.js"></script>
<script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
<script>
            window.dataLayer = window.dataLayer || [];

            function gtag()
            {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-116692175-1');
</script>
</body>

<!-- Mirrored from uselooper.com/layout-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:10 GMT -->
</html>