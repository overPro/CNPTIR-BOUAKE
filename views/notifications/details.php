<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Begin SEO tag -->
        <title> Epencia | Détails Notifications</title>


        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
        <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
        <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
        <!-- BEGIN THEME STYLES -->


        <link rel="stylesheet" href="http://localhost:81/carte/assets/css/main.css">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/daterangepicker/daterangepicker.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/timepicker/bootstrap-timepicker.min.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="http://localhost:81/carte/assets/datepicker/dist/css/bootstrap-datepicker.min.css">


        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme.min.css" data-skin="default">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme-dark.min.css" data-skin="dark">
        <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
        <script> var skin = localStorage.getItem('skin') || 'default';
            var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');

            unusedLink.setAttribute('rel', '');
            unusedLink.setAttribute('disabled', true);
        </script><!-- END THEME STYLES -->
        <style>
            .btn-lighte {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-lighte:hover {
                color: #212529;
                background-color: #e2e6ea;
                border-color: #dae0e5;
            }
            .im{
                padding: 0.25rem;
                background-color: #FFF;
                border: 1px solid #dee2e6;
                border-radius: 0.25rem;
                max-width: 100%;
                height: auto;
            }
        </style>
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
                        <!-- .page-cover -->
                        <?php foreach ($details as $value) {
                            ?> 
                            <header class="page-cover">
                                <div class="text-center">                                
                                    <a href="javascript:void(0)" class="user-avatar user-avatar-xl">
                                        <?php if (is_file("upload/photo/" . $value['photo'])) { ?>
                                            <img class="im" src="http://localhost:81/carte/upload/photo/<?php echo $value['photo']; ?>" title="<?php echo $value['nom_prenom']; ?>">
                                        <?php } else { ?>
                                            <img class="im" src="http://localhost:81/carte/upload/user.jpg" title="<?php echo $value['nom_prenom']; ?>">
                                        <?php } ?>
                                    </a>
                                    <h2 class="h4 mt-2 mb-0"> <?php echo $value['nom_prenom']; ?> </h2>
                                    <div class="my-1">
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="far fa-star text-yellow"></i>
                                    </div>
                                    <p class="text-muted"> <?php echo $value['email']; ?> </p>
                                    <p> 
                                    <h5 class="mb-1">
                                        <?php echo $value['objet']; ?>
                                    </h5>                                
                                    </p>
                                </div><!-- .cover-controls -->
                                <div class="cover-controls cover-controls-bottom">
                                    <a style="margin-left: -150%" href="javascript:void(0)" class="btn btn-light">Publiée <?php echo date_notif($value['date']); ?></a>
                                    <a style="margin-left: 150%" href="http://localhost:81/carte/search/notification/supprimer&nt=<?php echo $not; ?>" class="btn btn-lighte">
                                        <i class="fa fa-eraser  mr-1"></i> Supprimer la notification
                                    </a></a>
                                </div><!-- /.cover-controls -->
                            </header><!-- /.page-cover -->                       

                            <!-- .page-inner -->
                            <div class="page-inner">
                                <!-- .page-section -->
                                <div class="page-section">
                                    <!-- .section-block -->

                                    <!-- grid row -->
                                    <div class="row">
                                        <!-- grid column -->
                                        <div class="col-xl-12">
                                            <!-- .card -->
                                            <section class="card card-body card-fluid" style="padding-bottom: 0%">
                                                <h4 class="header-title mt-0 mb-3"><?php echo $value['titre']; ?></h4>
                                                <p class="text-muted font-13">
                                                    <?php echo $value['text']; ?>
                                                </p>

                                                <hr/>
                                                <div class="row">
                                                    <div class="col-xl-4 text-left" style="">
                                                        <p class="text-muted mb-0">
                                                            <strong>Date de publication :</strong> 
                                                            <span class="ml-2"><?php echo date('d-m-Y  H:i:s', strtotime($value['date'])); ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-4 text-center" style="margin-top: 2%">
                                                        <p class="text-muted mb-0"><strong>Ailleurs :</strong>
                                                            <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                            <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                                            <a class="d-inline-block ml-2 text-muted" title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-4 text-right" style="">
                                                        <p class="text-muted mb-0">
                                                            <strong>Publiée <?php echo date_notif($value['date']); ?></strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </section><!-- /.card -->
                                        </div>
                                    </div><!-- /grid row -->

                                </div><!-- /.page-section -->
                            </div><!-- /.page-inner -->
                        <?php } ?>
                    </div><!-- /.page -->
                </div><!-- .app-footer -->        
            </main><!-- /.app-main -->


        </div><!-- /.app -->
        <!-- BEGIN BASE JS -->
        <script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
        <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
        <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
        <!-- BEGIN PLUGINS JS -->

        <!-- daterangepicker -->
        <script src="http://localhost:81/carte/assets/moment/min/moment.min.js"></script>
        <script src="http://localhost:81/carte/assets/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="http://localhost:81/carte/assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="http://localhost:81/carte/assets/timepicker/bootstrap-timepicker.min.js"></script>


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
        <script src="http://localhost:81/carte/assets/javascript/pages/datatables-filters-demo.js"></script> <!-- END PAGE LEVEL JS -->
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
                //Date picker
                $('#datepicker_add').datepicker({
                    autoclose: true,
                    format: 'd-m-Y'
                })
                $('#datepicker_edit').datepicker({
                    autoclose: true,
                    format: 'd-m-Y'
                })

                //Timepicker
                $('.timepicker').timepicker({
                    showInputs: false
                })

                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'D/M/Y h:mm A'})
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                        function (start, end) {
                            $('#daterange-btn span').html(start.format('d-m-Y') + ' - ' + end.format('d-m-Y'))
                        }
                )

            });
        </script>

    </body>

</html>