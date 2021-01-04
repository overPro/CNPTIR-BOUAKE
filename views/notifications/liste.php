<!DOCTYPE html>
<html lang="en">

    <head>

        <title> Epencia.net | Comptes admin - Liste </title>

        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
        <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
        <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/css/app.min.css">
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

                                <h1 class="page-title"> Liste des notifications </h1>
                            </header><!-- /.page-title-bar -->

                            <?php if (!empty($message)) { ?>
                                <div class="section-block" style="margin-left: 25%; margin-right: 25%">
                                    <div class="alert alert-info has-icon">
                                        <div class="alert-icon">
                                            <i class="oi oi-info">                                     
                                            </i>
                                        </div>
                                        <p style="color: red !important; font-weight: bold" class="text-center"><?php echo $message; ?></p>                                    
                                    </div>                                
                                </div>
                            <?php } ?>

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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">Vos notifcations</h4>
                                                <div class="inbox-widget">
                                                    <?php
                                                    foreach ($nns as $key => $value) {
                                                        $proprio = $notif->proprietaire_de_notification($value['notification']);
                                                        if ($value['lecture'] == 0) {
                                                            $bac = "#f2eded";
                                                        } elseif ($value['lecture'] == 1) {
                                                            $bac = "#ffffff";
                                                        }
                                                        ?>
                                                        <hr>
                                                        <a style="text-decoration: none" href="http://localhost:81/carte/search/notification/details&nt=<?php echo $value['notification']; ?>">
                                                            <div class="inbox-item" style="background-color: <?php echo $bac; ?>">
                                                                <div class="inbox-item-img">
                                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                                        <img src="http://localhost:81/carte/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                                    <?php } else { ?>
                                                                        <img src="http://localhost:81/carte/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                                    <?php } ?>
                                                                </div>
                                                                <p class="inbox-item-author"><?php echo $proprio[0]['nom_prenom']; ?></p>
                                                                <p class="inbox-item-text"><?php echo $value['objet'] . ' => ' . $value['titre']; ?></p>
                                                                <p class="inbox-item-date">
                                                                    <i class="text-info font-13"><?php echo date_notif($value['date']); ?></i>
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <hr>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div> <!-- end card body-->
                                        </div> <!-- end card -->
                                    </div><!-- end col-->
                                </div>

                            </section><!-- /.card -->



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
                        <script src="http://localhost:81/carte/assets/vendor/datatables/jquery.dataTables.min.js"></script>
                        <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/dataTables.buttons.min.js"></script>
                        <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js"></script>
                        <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.html5.min.js"></script>
                        <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.print.min.js"></script> <!-- END PLUGINS JS -->
                        <!-- BEGIN THEME JS -->
                        <script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
                        <!-- BEGIN PAGE LEVEL JS -->
                        <script src="http://localhost:81/carte/assets/javascript/pages/dataTables.bootstrap.js"></script>
                        <script src="http://localhost:81/carte/assets/javascript/pages/datatables-demo.js"></script> <!-- END PAGE LEVEL JS -->
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