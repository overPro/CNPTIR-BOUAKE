<!DOCTYPE html>
<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
        <!-- Begin SEO tag -->
        <title> Epencia Pay | Produits - Details </title>
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
        <div class="app">
            <?php include "config/dashboard.php"; ?>
            <main class="app-main">
                <!-- .wrapper -->
                <div class="wrapper">
                    <!-- .page -->
                    <div class="page">
                        <!-- .page-inner -->
                        <div class="page-inner">


                            <div class="page-section">
                                <center><?php echo $message; ?></center>

                                <!-- .section-block -->
                                <div class="section-block">

                                    <form enctype="multipart/form-data" action="http://localhost:81/carte/search/produit/details" method="POST">


                                        <div class="card">
                                            <div class="row no-gutters">
                                                <aside class="col-sm-5 border-right">
                                                    <article class="gallery-wrap">
                                                        <div class="img-big-wrap">
                                                            <div> <a href="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>" data-fancybox=""><img src="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>"></a></div>
                                                        </div> <!-- slider-product.// -->
                                                        <div class="img-small-wrap">
                                                            <div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>"></div>
                                                            <div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo2_produit; ?>"></div>
                                                            <div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo3_produit; ?>"></div>
                                                            <div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo4_produit; ?>"></div>
                                                        </div> <!-- slider-nav.// -->
                                                    </article> <!-- gallery-wrap .end// -->
                                                </aside>
                                                <aside class="col-sm-7">
                                                    <article class="p-5">
                                                        <h3 class="title mb-3"><?php echo $libelle_produit; ?></h3>

                                                        <div class="mb-3">
                                                            <var class="price h3 text-warning">
                                                                <span class="currency">F CFA  </span><span class="num"><?php if (!empty($prix_vente)) echo number_format($prix_vente, 0, ',', ' '); ?></span>
                                                            </var>
                                                            <span>/par article</span>
                                                        </div> <!-- price-detail-wrap .// -->
                                                        <dl>
                                                            <dt>Description</dt>
                                                            <dd>

                                                                <div class="form-group">

                                                                    <textarea readonly="" class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $details_produit; ?></textarea>
                                                                </div>

                                                            </dd>

                                                        </dl>
                                                        <dl class="row">
                                                            <dt class="col-sm-3">Reference : </dt>
                                                            <dd class="col-sm-9"><?php echo $reference_produit; ?></dd>

                                                            <dt class="col-sm-3">Categorie : </dt>
                                                            <dd class="col-sm-9"><?php echo $categorie_produit; ?> </dd>

                                                            <dt class="col-sm-3">Etat : </dt>
                                                            <dd class="col-sm-9"><?php echo $etat_produit; ?> </dd>
                                                        </dl>

                                                        <hr>
                                                        <div class="row" hidden="">
                                                            <div class="col-sm-12">
                                                                <dl class="dlist-inline">
                                                                    <dt>Code de validation : </dt>
                                                                    <dd>
                                                                        <input hidden="" type="text" class="form-control" name="sai_code_confirmation">

                                                                    </dd>
                                                                </dl> <!-- item-property .// -->
                                                            </div> <!-- col.// -->
                                                        </div> <!-- row.// -->

                                                        <div class="row" hidden="">
                                                            <div class="col-sm-12">
                                                                <dl class="dlist-inline">
                                                                    <dt>Reference produit : </dt>
                                                                    <dd>
                                                                        <input type="text" class="form-control" name="sai_reference" value="<?php echo $reference_produit; ?>">

                                                                    </dd>
                                                                </dl> <!-- item-property .// -->
                                                            </div> <!-- col.// -->
                                                        </div> <!-- row.// -->

                                                        <div class="row" hidden="">
                                                            <div class="col-sm-12">
                                                                <dl class="dlist-inline">
                                                                    <dt>Montant : </dt>
                                                                    <dd>
                                                                        <input  type="text" class="form-control" name="sai_montant" value="<?php echo $prix_vente; ?>">

                                                                    </dd>
                                                                </dl> <!-- item-property .// -->
                                                            </div> <!-- col.// -->
                                                        </div> <!-- row.// -->

                                                        <div class="row" hidden="">
                                                            <div class="col-sm-12">
                                                                <dl class="dlist-inline">
                                                                    <dt>Expediteur : </dt>
                                                                    <dd>
                                                                        <input type="text" class="form-control" name="sai_expediteur" value="<?php echo $_SESSION['matricule']; ?>">
                                                                    </dd>
                                                                </dl> <!-- item-property .// -->
                                                            </div> <!-- col.// -->
                                                        </div> <!-- row.// -->

                                                        <div class="row" hidden="">
                                                            <div class="col-sm-12">
                                                                <dl class="dlist-inline">
                                                                    <dt>Destinataire : </dt>
                                                                    <dd>
                                                                        <input type="text" class="form-control" name="sai_destinataire" value="<?php echo $code_fournisseur; ?>">

                                                                    </dd>
                                                                </dl> <!-- item-property .// -->
                                                            </div> <!-- col.// -->
                                                        </div> <!-- row.// -->

                                                        <hr>
                                                        <button name="btn_panier" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i> Valider son achat </button>

                                                    </article> <!-- card-body.// -->
                                                </aside> <!-- col.// -->
                                            </div> <!-- row.// -->
                                        </div> <!-- card.// -->
                                    </form>

                                </div><!-- /.page -->
                            </div><!-- /.wrapper -->
                        </div><!-- /.page -->
                    </div><!-- /.wrapper -->

                </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
</div><!-- /.app -->
<!-- BEGIN BASE JS -->
<script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="http://localhost:81/carte/assets/vendor/pace/pace.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
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


</html>