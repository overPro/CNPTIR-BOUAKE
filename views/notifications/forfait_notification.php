<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Begin SEO tag -->
        <title> Epencia.net | compte - Enregistrement </title>

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
    <body>
        <!-- .app -->
        <div class="app">
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

                                <h1 class="page-title"> Notifications </h1>
                            </header><!-- /.page-title-bar -->
                            <!-- .page-section -->
                            
                            <?php if(!empty($message)){ ?>
                            <div class="section-block" style="margin-left: 25%; margin-right: 25%">
                                <div class="alert alert-info has-icon">
                                    <div class="alert-icon">
                                        <i class="oi oi-info">                                     
                                        </i>
                                    </div>
                                    <p style="color: red !important; font-weight: bold" class="text-center"><?php echo $message ; ?></p>                                    
                                </div>                                
                            </div>
                            <?php } ?>
                         
                            <div class="page-section">
                               
                                <div class="section-deck">
                                   <section class="card card-fluid">
                                        <!-- .card-body -->
                                        <div class="card-body">           
                                            <form action="http://localhost:81/carte/search/notification/forfait" method="POST" enctype="multipart/form-data">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Partenaire: </label>
                                                            <select class="form-control select2" name="parte">
                                                                <option selected="">===== Choisir =====</option>
                                                                <optgroup label="Liste des partenaires">
                                                                    <?php
                                                                    if (!empty($lespartenaires)) {
                                                                        foreach ($lespartenaires as $key => $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value['matricule']; ?>"><?php echo $value['nom_prenom']; ?></option>

                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>

                                                                </optgroup>

                                                            </select>
                                                            <span class="font-13 text-muted"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Date de debut </label>
                                                            <input  type="date" class="form-control" name="debut">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Durée : </label>
                                                            <select  class="form-control select2" name="duree">
                                                                <option selected=""> Choisir une durée</option>
                                                                <optgroup label="Durée de forfait">
                                                                    <option value="1"> 01 Mois</option>
                                                                    <option value="2"> 02 Mois</option>
                                                                    <option value="3"> 03 Mois</option>
                                                                    <option value="4"> 04 Mois</option>
                                                                    <option value="5"> 05 Mois</option>
                                                                    <option value="6"> 06 Mois</option>
                                                                    <option value="7"> 07 Mois</option>
                                                                    <option value="8"> 08 Mois</option>
                                                                    <option value="9"> 09 Mois</option>
                                                                    <option value="10"> 10 Mois</option>
                                                                    <option value="11"> 11 Mois</option>
                                                                    <option value="12"> 12 Mois</option>
                                                                </optgroup>

                                                            </select>
                                                        </div>
                                                    </div>                                           
                                                </div>                                                
                                        </div>
                                                                                       
                                </div>                   




                            </div>

                        </div>
                        <center>
                            <div class="tile-footer">
                                <button class="btn btn-success" name="btn_envoyer"><i class="fa fa-fw fa-lg fa-check-circle"></i>Valider</button>
                                <button class="btn btn-danger" name=""><i class="fa fa-fw fa-lg fa-angle-left"></i>Annuler</button>
                            </div>
                        </center>

                    </div>
                </div>
                </form>
        </div><!-- /.card-body -->

    </div><!-- /.section-deck -->
    <hr class="my-5">




</div><!-- /.masonry-layout -->
</div><!-- /.page-section -->
</div><!-- /.page-inner -->
</div><!-- /.page -->
</div><!-- .app-footer -->

<!-- /.wrapper -->
</main><!-- /.app-main -->
</div><!-- /.app -->
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
</body>

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:42 GMT -->
</html>