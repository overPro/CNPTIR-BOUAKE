<!DOCTYPE html>
<html lang="en">

    <head>

        <title> Epencia.net | Epargne - Liste </title>

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
        <script>
            var skin = localStorage.getItem('skin') || 'default';
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

                                <h1 class="page-title"> Liste des epargnes</h1>
                            </header><!-- /.page-title-bar -->

                            <form action="http://localhost:81/carte/search/epargne/liste" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <?php if (!empty($_SESSION['role']) and $_SESSION['role'] == "Superviseur" or $_SESSION['role'] == "Administrateur" or $_SESSION['role'] == 'Distributeur') { ?>
                                        <div class="form-group col-md-12">
                                            <label>Matricule</label> 
                                            <input name="sai_matricule" type="text" class="form-control">
                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($_SESSION['role']) and $_SESSION['role'] == 'Investisseur') { ?>
                                        <div class="form-group col-md-12">
                                            <label>Matricule</label> 
                                            <input readonly="" name="sai_matricule" type="text" class="form-control" value="<?php echo $_SESSION['matricule']; ?>">
                                        </div>
                                    <?php } ?>
                                </div>    

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Date debut</label> 
                                        <input name="sai_date_debut" type="date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date fin</label> 
                                        <input name="sai_date_fin" type="date" class="form-control">
                                    </div>
                                </div>

                                <center>
                                    <div class="tile-footer">
                                        <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button>

                                    </div>
                                </center>

                                <br>
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
                                                    <th>Code</th>
                                                    <th>Type</th>
                                                    <th>Montant</th>
                                                    <th>Date creation</th>
                                                    <th>Date debut</th>
                                                    <th>Date fin</th>
                                                    <th>Duree</th>
                                                    <th>Frais</th>
                                                    <th>Matricule</th>
                                                    <th>Etat</th>
                                                    <th>Opérations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($sol)) {
                                                    foreach ($sol as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <a class="btn btn-outline-danger" style="padding-left: 1%; padding-right: 1%" href="http://localhost:81/carte/search/epargne/enregistrement&code_epargne=<?php echo $value['code_epargne']; ?>" title="Visualiser"><?php echo $value['code_epargne']; ?></a>
                                                            </td>
                                                            <td><?php echo $value['type_epargne']; ?></td>
                                                            <td><?php echo $value['montant_epargne']; ?></td>
                                                            <td><?php echo $value['date_creation']; ?></td>
                                                            <td><?php echo $value['date_debut']; ?></td>
                                                            <td><?php echo $value['date_fin']; ?></td>
                                                            <td><?php echo $value['duree']; ?></td>
                                                            <td><?php echo $value['frais']; ?></td>
                                                            <td><?php echo $value['matricule']; ?></td>
                                                            <td><?php echo $value['etat_epargne']; ?></td>
                                                            <td>
                                                                <?php
                                                                if ($value['etat_epargne'] != "bloque") {
                                                                    if (date('Y-m-d') >= $value['date_fin']) {
                                                                        ?>
                                                                        <a type="button" code="<?php echo $value['code_epargne']; ?>" data-toggle="modal" data-target="#transfertModal" class="btn btn-sm btn-icon btn-outline-primary trans" title="Transférer vers la carte"><i class="oi oi-transfer"></i></a>
                                                                    <?php } else { ?>
                                                                        <a type="button" code="<?php echo $value['code_epargne']; ?>" data-toggle="modal" data-target="#epargneModal" class="btn  btn-sm btn-icon btn-outline-danger plus" href="javascript:void(0)" title="Compléter le montant épargné"><i class="oi oi-plus"></i></a>
                                                                        <a type="button" code="<?php echo $value['code_epargne']; ?>" data-toggle="modal" data-target="#dateEpargneModal" class="btn  btn-sm btn-icon btn-outline-warning date" href="javascript:void(0)" title="Modifier le delai de fin"><i class="oi oi-pencil"></i></a>
                                                                    <?php }
                                                                } ?>
                                                            </td>


                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table><!-- /.table -->
                                    </div><!-- /.table-responsive -->

                                </section><!-- /.card -->

                            </form>

                            <!-- /.wrapper -->
                        </div><!-- /.app -->
                    </div><!-- /.app -->
                </div><!-- /.app -->
            </main><!-- /.app-main -->
        </div><!-- /.app -->


        <form action="" method="POST">
            <div class="modal fade" id="epargneModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                    <!-- .modal-content -->
                    <div class="modal-content">
                        <!-- .modal-header -->
                        <div class="modal-header">
                            <h6 class="modal-title inline-editable">
                                Compléter le solde d'épargne
                            </h6>
                        </div><!-- /.modal-header -->
                        <!-- .modal-body -->
                        <div class="modal-body">
                            <!-- .form-row -->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cnContactName">Solde actuel :</label>
                                        <input type="text" id="soldeActuel" disabled="" class="form-control">
                                        <input type="hidden" id="codeSolde" name="code" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="montant">Montant :</label>
                                        <input type="text" id="montant_a_completer" name="montant_completer" placeholder="Renseigner le montant à compléter" class="form-control">
                                    </div>
                                </div>                                                
                            </div><!-- /.form-row -->
                        </div><!-- /.modal-body -->
                        <!-- .modal-footer -->
                        <div class="modal-footer">
                            <button name="saveSolde" type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </form><!-- /.modal -->
        <!-- .modal -->


        <form action="" method="POST">
            <div class="modal fade" id="dateEpargneModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                    <!-- .modal-content -->
                    <div class="modal-content">
                        <!-- .modal-header -->
                        <div class="modal-header">
                            <h6 class="modal-title inline-editable">
                                Changer la date de fin d'épargne
                            </h6>
                        </div><!-- /.modal-header -->
                        <!-- .modal-body -->
                        <div class="modal-body">
                            <!-- .form-row -->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cnContactName">Date de fin actuelle :</label>
                                        <input type="text" id="dateActuel" disabled="" class="form-control">
                                        <input type="hidden" id="codeDate" name="code" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="montant">Nouvelle Date :</label> 
                                        <input type="date" id="date_change" name="newDate" class="form-control">
                                    </div>
                                </div>                                                
                            </div><!-- /.form-row -->
                        </div><!-- /.modal-body -->
                        <!-- .modal-footer -->
                        <div class="modal-footer">
                            <button type="submit" name="saveDate" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </form><!-- /.modal -->
        <!-- .modal -->

        <form action="" method="POST">
            <div class="modal fade" id="transfertModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                    <!-- .modal-content -->
                    <div class="modal-content">
                        <!-- .modal-header -->
                        <div class="modal-header">
                            <h6 class="modal-title inline-editable">
                                Transférer le montant sur la carte pour retrait
                            </h6>
                        </div><!-- /.modal-header -->
                        <!-- .modal-body -->
                        <div class="modal-body">
                            <!-- .form-row -->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="sidebar-section-fill">
                                        <!-- .card -->
                                        <div class="card card-reflow">
                                            <!-- .card-body -->
                                            <div class="card-body">
                                                <h4 class="card-title"> Resumé </h4><!-- grid row -->
                                                <div class="row">
                                                    <!-- grid column -->
                                                    <div class="col-6">
                                                        <!-- .metric -->
                                                        <div class="metric">
                                                            <h6 class="metric-value" id="epargneDd">  </h6>
                                                            <p class="metric-label mt-1"> Date Debut </p>
                                                        </div><!-- /.metric -->
                                                    </div><!-- /grid column -->
                                                    <!-- grid column -->
                                                    <input type="hidden" name="epargneCode" id="epargneCode" />
                                                    <div class="col-6">
                                                        <!-- .metric -->
                                                        <div class="metric">
                                                            <h6 class="metric-value" id="epargneDf">  </h6>
                                                            <p class="metric-label mt-1"> Date Fin </p>
                                                        </div><!-- /.metric -->
                                                    </div><!-- /grid column -->
                                                    <!-- grid column -->
                                                    <div class="col-6">
                                                        <!-- .metric -->
                                                        <div class="metric">
                                                            <h6 class="metric-value" id="epargneMontant">  </h6>
                                                            <p class="metric-label mt-1"> Montant </p>
                                                        </div><!-- /.metric -->
                                                    </div><!-- /grid column -->
                                                    <!-- grid column -->
                                                    <div class="col-6">
                                                        <!-- .metric -->
                                                        <div class="metric">
                                                            <h6 class="metric-value" id="epargneFrais">  </h6>
                                                            <p class="metric-label mt-1"> Frais </p>
                                                        </div><!-- /.metric -->
                                                    </div><!-- /grid column -->
                                                </div><!-- /grid row -->                                                                
                                            </div><!-- /.card-body -->
                                            <!-- .card-body -->
                                        </div>                                                                                               
                                    </div><!-- /.form-row -->
                                </div><!-- /.modal-body -->
                            </div><!-- /.modal-body -->
                        </div><!-- /.modal-body -->
                        <!-- .modal-footer -->
                        <div class="modal-footer">
                            <button type="submit" name="transferEpargne" class="btn btn-primary">Transférer</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                        </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </form><!-- /.modal -->
        <!-- .modal -->


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
        <script>
            $(function () {
                $(".plus").click(function () {
                    var code = $(this).attr('code');
                    $("#codeSolde").val(code);
                    mod(code, 'solde');
                });

                $(".trans").click(function () {
                    var code = $(this).attr('code');
                    $("#epargneCode").val(code);
                    //alert(code);
                    resume(code);
                });

                $(".date").click(function () {
                    var code = $(this).attr('code');
                    $("#codeDate").val(code);
                    mod(code, 'date');
                });
            });

            function mod(code, type) {
                $.ajax({
                    url: "http://localhost:81/carte/search/epargne/app",
                    type: "POST",
                    data: {l: 1, code: code, t: type},
                    success: function (response) {
                        $("#" + type + "Actuel").val(response);
                    }
                });
            }

            function resume(code) {
                $.ajax({
                    url: "http://localhost:81/carte/search/epargne/app",
                    type: "POST",
                    data: {trans: 1, code: code},
                    dataType: 'json',
                    success: function (response) {
                        $("#epargneDd").html(response.date_debut);
                        $("#epargneDf").html(response.date_fin);
                        $("#epargneFrais").html(response.frais);
                        $("#epargneMontant").html(response.montant_epargne);
                    }
                });
            }
        </script>


    </body>

</html>