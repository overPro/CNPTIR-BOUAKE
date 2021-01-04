<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="La liste des commandes.">

        <title>Epencia - Produits / liste</title>

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

                            <h1 class="page-title"> Mes Campagnes de produits </h1>
                        </header><!-- /.page-title-bar -->
                        <!-- .page-section -->
                        <center><?php echo $message; ?> </center>
                        <button type="button" data-toggle="modal" data-target="#epargneModal" class="btn btn-outline-danger plus pull-right" style="margin-left: 83%"><i class="oi oi-plus"></i> Ajouter Campagne</button>
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
                                        <!-- .table -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Reference</th>
                                                    <th>Libelle</th>
                                                    <th>Nombre de vue</th>
                                                    <th>Montant</th>
                                                    <th>État</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($mesCampagnes)) {
                                                    foreach ($mesCampagnes as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value['reference_produit']; ?></td>
                                                            <td><?php echo $value['libelle_produit']; ?></td>
                                                            <td><?php echo $value['nbre_vue']; ?></td>
                                                            <td><?php echo $value['montant']; ?></td>
                                                            <td><?php echo $value['etat']; ?></td>     <td><a  code="<?php echo $value['reference_produit']; ?>" type="button" data-toggle="modal" data-target="#modifModal" class="btn btn-danger param " ><i class="oi oi-plus"></i>Modifier</a></td>                                                            
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div><!-- /.card-body -->
                            </form>  
                        </div><!-- /.section-deck -->
                        <hr class="my-5">




                    </div><!-- /.masonry-layout -->
                </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
    </div><!-- .app-footer -->

</main>



<form action="" method="POST">
    <div class="modal fade" id="epargneModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
            <!-- .modal-content -->
            <div class="modal-content">
                <!-- .modal-header -->
                <div class="modal-header">
                    <h6 class="modal-title inline-editable">
                        Ajouter Un Campagne pour booster mes produits
                    </h6>
                </div><!-- /.modal-header -->
                <!-- .modal-body -->
                <div class="modal-body">
                    <!-- .form-row -->
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cnContactName">Produit :</label>
                                <select class="form-control" name="ref_prod">
                                    <?php foreach ($Mes_produits as $prod) {
                                        ?>
                                        <optgroup label="<?php echo $prod['cat']; ?>">                                          
                                            <?php
                                            $categPro = $produit->listeProduitCategorieMatricule($prod['cat'], $_SESSION['matricule']);
                                            foreach ($categPro as $values) {
                                                ?>
                                                <option value="<?php echo $values['reference_produit']; ?>"><?php echo $values['libelle_produit']; ?></option>                                           
                                                <?php
                                            }
                                            ?>
                                        </optgroup>
                                        <?php
                                    }
                                    ?>
                                </select>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="montant">Nombre de Vue :</label>
                                <input type="text" id="nbreVue" name="nbreVue" placeholder="Nombre de vues souhaitées..." class="form-control">
                            </div>
                        </div>                                                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="montant">Montant :</label>
                                <input readonly="" type="text" id="montant_vue" name="montant_vue" placeholder="Le montant à payer..." class="form-control">
                            </div>
                        </div>                                                
                    </div><!-- /.form-row -->
                </div><!-- /.modal-body -->
                <!-- .modal-footer -->
                <div class="modal-footer">
                    <button name="saveCampagne" type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</form><!-- /.modal -->
<!-- .modal -->

<!-- Modal Edit -->
<form action="" method="POST">
    <div class="modal fade" id="modifModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog" role="document">
            <!-- .modal-content -->
            <div class="modal-content">
                <!-- .modal-header -->
                <div class="modal-header">
                    <h6 class="modal-title inline-editable">
                        Modifier Un Campagne pour booster mes produits
                    </h6>
                </div><!-- /.modal-header -->
                <!-- .modal-body -->
                <div class="modal-body">
                    <!-- .form-row -->
                    <div class="form-row">
                        <div class="col-md-12">
                           <input type="hidden" name="epargneCode" id="moi" /> 
                            <div class="form-group">
                                <label for="cnContactName">Produit :</label>
                                <select class="form-control" id="editref_prod" name="ref_prod">
                                    <?php foreach ($Mes_produits as $prod) {
                                        ?>
                                        <optgroup label="<?php echo $prod['cat']; ?>">                                          
                                            <?php
                                            $categPro = $produit->listeProduitCategorieMatricule($prod['cat'], $_SESSION['matricule']);
                                            foreach ($categPro as $values) {
                                                ?>
                                                <option value="<?php echo $values['reference_produit']; ?>"><?php echo $values['libelle_produit']; ?></option>                                           
                                                <?php
                                            }
                                            ?>
                                        </optgroup>
                                        <?php
                                    }
                                    ?>
                                </select>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nbreVue">Nombre de Vue :</label>
                                <input type="text" id="editnbreVue" name="editnbreVue"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="montant">solde :</label>
                                <input type="text" id="editsolde" name="editsolde"  class="form-control">
                            </div>
                        </div>                                                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="montant">Montant :</label>
                                <input  type="text" id="editmontant_vue" name="editmontant_vue" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="montant">Cout :</label>
                                <input  type="text" id="editcout" name="editcout"  class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="cnContactName">Etat :</label>
                                <select class="form-control" id="editetat" name="editetat">
                                 <?php 
                                 $etat=$produit->listeEtat();
                                            foreach ($etat as $values) {
                                                ?>
    <option value="<?php echo $values['etat']; ?>"><?php echo $values['etat']; ?></option>                                           <?php
                                            }
                                           
                                    
                                    ?>      
                                </select>    
                            </div>
                        </div>                                                
                    </div><!-- /.form-row -->
                </div><!-- /.modal-body -->
                <!-- .modal-footer -->
                <div class="modal-footer">
                    <button name="Modif" type="submit" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</form><!-- /.modal -->
<!-- .modal -->
<!-- Fin Modal edit -->

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
        $("#nbreVue").keyup(function () {
            $("#montant_vue").val($(this).val() * 10);
        });
        $("#editnbreVue").keyup(function () {
            $("#editmontant_vue").val($(this).val() * 10);
        });



    $(".param").click(function () {
                    var code = $(this).attr('code');
                                         
                     afficher(code);
                 });


                 });

     function afficher(param) {       
                $.ajax({
                    url: "http://localhost:81/carte/search/produit/app",
                    type: "POST",
                    data: {param:1,code: param},
                    dataType: 'json',
                    success: function (response) {
                        $("#editnbreVue").val(response.nbre_vue);
                        $("#editref_prod").val(response.reference_produit);
                        $("#editmontant_vue").val(response.montant);
                        $("#epargneMontant").val(response.montant);
                        $("#editeta_prod").val(response.editeta_prod);
                        $("#editcout").val(response.cout);
                        $("#editsolde").val(response.solde);
                        $("#editetat").val(response.etat);

                    }
                });
            }

</script>
</body>
</html>