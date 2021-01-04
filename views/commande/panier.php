<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Epencia Pay | Mon panier</title>

        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
        <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
        <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/nouislider/nouislider.min.css"><!-- END PLUGINS STYLES -->

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
    <body class="app sidebar-mini rtl">

        <?php include "config/dashboard.php"; ?>

        <!-- .app-main -->
        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <!-- .page-inner -->
                    <div class="page-inner">
                        <!-- .page-title-bar -->
                        <header class="page-title-bar">

                            <h1 class="page-title"> Panier </h1>
                            <h3> <?php echo $message; ?> </h3>
                        </header><!-- /.page-title-bar -->
                        <!-- .page-section -->
                        <div class="page-section">
                            <!-- .section-deck -->
                            <div class="section-deck">
                                <!-- .card -->
                                <section class="card card-fluid">
                                    <!-- .card-header -->
                                    <header class="card-header border-0">
                                        <!-- .d-flex -->
                                        <div class="d-flex align-items-center">

                                            <div class="card-header-control">
                                                <!-- .dropdown -->
                                                <div class="dropdown">

                                                    <div class="dropdown-arrow"></div>

                                                </div><!-- /.dropdown -->
                                            </div><!-- /.card-header-control -->
                                        </div><!-- /.d-flex -->
                                    </header><!-- /.card-header -->
                                    <!-- .table-responsive -->
                                    <div class="table-responsive">

                                        <?php
                                        if (!empty($sol)) {
                                        foreach ($sol as $key => $value) {
                                        ?>                        <!-- .table -->
                                        <form id="form" method="POST" action="http://localhost:81/carte/search/commande/panier">

                                            <input type="hidden" name="num_cmd" value="<?php echo $value['numero_commande']; ?>">                   
                                            <div class="card">
                                                <table class="table table-hover shopping-cart-wrap">
                                                    <thead class="text-muted">
                                                        <tr>
                                                            <th scope="col">Produit</th>
                                                            <th scope="col" width="120">Quantité</th>
                                                            <th scope="col" width="120">Prix unitaire</th>
                                                            <th scope="col" width="120">Montant</th>
                                                            <th scope="col" width="120">Epargne</th>
                                                            <th scope="col" width="120" class="text-right">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <figure class="media">
                                                                    <div class="img-wrap"><img width="80" height="100" src="http://localhost:81/carte/upload/produits/<?php echo $value['photo1_produit']; ?>" ></div>
                                                                    <figcaption class="media-body">
                                                                        <h6 class="title text-truncate"><?php echo $value['libelle_produit']; ?> </h6>
                                                                        <dl class="dlist-inline small">
                                                                            <dt>Categorie : </dt>
                                                                            <dd><?php echo $value['categorie_produit']; ?></dd>
                                                                        </dl>
                                                                        <dl class="dlist-inline small">
                                                                            <dt>Reference : </dt>
                                                                            <dd>
                                                                                <?php echo $value['reference_produit']; ?>
                                                                                <input hidden="" type="text" name="sai_reference_produit" value="<?php echo $value['reference_produit']; ?>">
                                                                            </dd>


                                                                        </dl>
                                                                    </figcaption>
                                                                </figure> 
                                                            </td>
                                                            <td> 
                                                                <select name="sai_quantite_produit" class="form-control" id="nombre" onkeyup="Calcul()">
                                                                    <option selected="<?php echo $value['quantite_produit']; ?>"><?php echo $value['quantite_produit']; ?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>

                                                            </td>
                                                            <td> 
                                                                <div> 
                                                                    <label id="value"><?php echo $value['prix_produit']; ?></label>
                                                                    <small class="text-muted">(F CFA)</small>
                                                                    <input hidden="" type="text" name="sai_prix_produit" value="<?php echo $value['prix_produit']; ?>">

                                                                </div>

                                                            </td>
                                                            <td> 
                                                                <div class="price-wrap"> 
                                                                    <var class="price" id="montant"><?php echo $value['montant_commande']; ?></var> <small class="text-muted">(F CFA)</small>

                                                                    <input hidden="" type="text" name="sai_montant" value="<?php echo $value['prix_produit'] * $value['quantite_produit']; ?>">

                                                                </div> <!-- price-wrap .// -->
                                                            </td>
                                                            <td> 
                                                                <div class="price-wrap"> 
                                                                    <var class="price"><?php echo $value['epargne']; ?></var> <small class="text-muted">(F CFA)</small> 

                                                                </div> <!-- price-wrap .// -->
                                                            </td>
                                                            <td  class="text-right">
                                                                <button  class="btn btn-outline-success" type="submit" name="btn_modifier"><i class="fa fa-fw fa-lg fa-check-circle"></i>Appliquer</button>
                                                                <br><br>
                                                                <?php if ($value['epargne'] == 0) { ?>
                                                                <button  class="btn btn-outline-danger" type="submit" name="btn_supprimer"> <i class="fa fa-fw fa-lg fa-eraser"></i> Supprimer</button>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>

                                                        <?php if (in_array($value['numero_commande'], $en_cours)) {
                                                        ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td colspan="8">Votre commande est en cours de traitement <br></td>                                                            
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php }else if (in_array($value['numero_commande'], $traiter)) {
                                                        ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td colspan="8">Votre commande a été traitée avec succès! Vous recevrez une notification!. <br></td>                                                            
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php }else {
                                                        ?>
                                                        <tr>
                                                            <?php if ($value['epargne'] != $value['montant_commande']) { ?>
                                                            <td> </td>
                                                            <td>Saisir le montant :</td>
                                                            <td>
                                                                <input name="sai_epargne" class="form-control" placeholder="Montant" type="text" autocomplete="off">
                                                            </td>
                                                            <td>
                                                                <button  class="btn btn-outline-success" type="submit" name="btn_epargner"><i class="fa fa-fw fa-lg fa-edit"></i>Epargner</button>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <?php
                                                            } else {
                                                            $char = '0123456789';
                                                            $token_exp = '';
                                                            for ($i = 0;
                                                            $i < 3;
                                                            $i++) {
                                                            $token_exp .= $char[rand() % strlen($char)];
                                                            }
                                                            ?>
                                                            <td> </td>
                                                            <td><button class="btn btn-outline-warning" type="submit" name="btn_annuler"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler Paiement</button></td>
                                                            <td>
                                                                <label class="btn btn-outline-danger passer" cmd="<?php echo $value['numero_commande']; ?>"><i class="fa fa-angle-double-right"></i> Passer au paiement</label>
                                                                <div style="font-size: 1.2em; font-weight: bold" class="codeer" id="code<?php echo $value['numero_commande']; ?>"> code : <label class="text-info"><?php echo $token_exp; ?></label></div>
                                                                <input type="hidden" name="token" value="<?php echo $token_exp; ?>">
                                                            </td>
                                                            <td colspan="2" class="codeer" id="aff<?php echo $value['numero_commande']; ?>">
                                                                <input type="text" name="conf_token" class="form-control" autocomplete="off" placeholder="Insérez le code ici :"></td>

                                                            <td class="codeer" id="btnPayer<?php echo $value['numero_commande']; ?>">
                                                                <button class="btn btn-outline-info" type="submit" name="btn_payer"><i class="fa fa-fw fa-lg fa-circle"></i>Valider Paiement</button>
                                                            </td>
                                                        
                                                        </tr>
                                                        <?php }
                                                        
                                                            }
?>
                                                    </tbody>
                                                </table>
                                            </div> <!-- card.// -->

                                        </form> 
                                        <?php
                                        }
                                        }
                                        ?>


                                    </div>
                            </div><!-- /.card-body -->

                        </div><!-- /.section-deck -->
                        <hr class="my-5">




                    </div><!-- /.masonry-layout -->
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
    </div><!-- .app-footer -->

</main>
<!-- BEGIN BASE JS -->
<script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="http://localhost:81/carte/assets/vendor/pace/pace.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/masonry-layout/masonry.pkgd.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/nouislider/wNumb.js"></script>
<script src="http://localhost:81/carte/assets/vendor/nouislider/nouislider.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-load-image/load-image.all.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-canvas-to-blob/canvas-to-blob.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.iframe-transport.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.min.js"></script>
<script src="http://localhost:81/carte/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="http://localhost:81/carte/assets/javascript/pages/colorpicker-demo.js"></script>
<script src="http://localhost:81/carte/assets/javascript/pages/uploader-demo.js"></script>
<script src="http://localhost:81/carte/assets/javascript/pages/slider-demo.js"></script> <!-- END PAGE LEVEL JS -->
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

<script>
    $(function () {
        $(".codeer").hide();
        $("#nombre").change(function () {
            var nb = $(this).val();
            var pu = $("#value").html();
            $("#montant").html(nb * pu);
        });

        $(".passer").click(function () {
            var add = $(this).attr("cmd");
            $(this).hide(1000);
            $("#aff" + add).show(1000);
            $("#code" + add).show(1000);
            $("#btnPayer" + add).show(1000);
        });
    });
</script>
</body>
</html>