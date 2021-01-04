<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Begin SEO tag -->
        <title> Epencia Pay |  Suivi des ventes </title>

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

                                <h1 class="page-title"> Suivi des ventes </h1>
                                <center><h3> <?php echo $message; ?> </h3></center>
                            </header><!-- /.page-title-bar -->

                            <div class="page-section">
                                <!-- .section-deck -->
                                <div class="section-deck">
                                    <!-- .card -->
                                    <section class="card card-fluid">
                                        <!-- .card-body -->
                                        <div class="card-body">


                                            <form action="http://localhost:81/carte/search/commande/ventes" method="POST" enctype="multipart/form-data">


                                                <div class="row">

                                                    <?php if (!empty($_SESSION['role']) and $_SESSION['role'] == "Superviseur" or $_SESSION['role'] == "Administrateur" or $_SESSION['role'] == 'Distributeur') { ?>
                                                        <div class="form-group col-md-6">
                                                            <label>Matricule</label> 
                                                            <input name="sai_matricule" type="text" class="form-control"> 
                                                        </div>
                                                    <?php } ?>
                                                    <?php if (!empty($_SESSION['role']) and $_SESSION['role'] == "Investisseur") { ?>
                                                        <div class="form-group col-md-6">
                                                            <label>Matricule</label> 
                                                            <input readonly="" name="sai_matricule" type="text" class="form-control" value="<?php echo $_SESSION['matricule']; ?>"> 
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group col-md-6">
                                                        <label>Etat</label>
                                                        <select class="form-control" name="sai_etat">
                                                            <option value="Solde">Solde</option>
                                                            <option value="En cours">En cours</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <center>
                                                    <div class="tile-footer">
                                                        <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button>    
                                                    </div>
                                                </center>
                                                <br>

                                                <section class="card card-fluid">


                                                    <!-- .table-responsive -->
                                                    <div class="table-responsive">
                                                        <!-- .table -->
                                                        <table class="table">
                                                            <thead>
                                                                <tr>

                                                                    <th>Numero</th>
                                                                    <th>Date commande</th>
                                                                    <th>Reference</th>
                                                                    <th>Prix</th>
                                                                    <th>Quantité</th>
                                                                    <th>Montant</th>
                                                                    <th>Epargne</th>
                                                                    <th>Matricule</th>
                                                                    <th>Etat</th>
                                                                    <th class="operation">Opérations</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if (!empty($sol)) {
                                                                    foreach ($sol as $key => $value) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><a href="http://localhost:81/carte/search/commande/enregistrement&numero_commande=<?php echo $value['numero_commande']; ?>" class="btn btn-outline-danger" style="padding-left: 0%; padding-right: 0%"><?php echo $value['numero_commande']; ?></a></td>
                                                                            <td><?php echo $value['date_commande']; ?></td>
                                                                            <td><?php echo $value['reference_produit']; ?></td>
                                                                            <td><?php echo $value['prix_produit']; ?></td>
                                                                            <td><?php echo $value['quantite_produit']; ?></td>
                                                                            <td><?php echo $value['montant_commande']; ?></td>
                                                                            <td><?php echo $value['epargne']; ?></td>
                                                                            <td><?php echo $value['matricule']; ?></td>
                                                                            <td class="align-middle">
                                                                                <?php if (!empty($value['etat_commande']) and $value['etat_commande'] == "Solde") { ?>
                                                                                    <span class="badge badge-success"> Solde</span>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                    <span class="badge badge-danger"> <?php echo $value['etat_commande']; ?></span>
                                                                                </td>
                                                                            <?php } ?>

                                                                            <td class="operation">
                                                                                <a type="button" code="<?php echo $value['numero_commande']; ?>" data-toggle="modal" data-target="#epargneModal" class="btn btn-outline-danger plus" href="javascript:void(0)" title="Valider la commande du client">Valider</a>
                                                                            </td>



                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>

                                                            </tbody>
                                                        </table><!-- /.table -->
                                                    </div><!-- /.table-responsive -->

                                                </section><!-- /.card --><br>


                                                </div>

                                                </div>
                                                </div>

                                                </div>


                                                </div>
                                                </div>
                                            </form>
                                        </div><!-- /.card-body -->

                                </div><!-- /.section-deck -->
                                <!-- .card -->


                                <form action="" method="POST">
                                    <div class="modal fade" id="epargneModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
                                        <!-- .modal-dialog -->
                                        <div class="modal-dialog" role="document">
                                            <!-- .modal-content -->
                                            <div class="modal-content">
                                                <!-- .modal-header -->
                                                <div class="modal-header">
                                                    <h6 class="modal-title inline-editable">
                                                        Valider la commande client
                                                    </h6>
                                                </div><!-- /.modal-header -->
                                                <!-- .modal-body -->
                                                <div class="modal-body">
                                                    <!-- .form-row -->
                                                    <div class="form-row">
                                                        <input type="hidden" id="codeSolde" name="code" class="form-control">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="cnContactName">Commande :</label>
                                                                <input type="text" id="Commande" name="coder" class="form-control" readonly="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="cnContactName">Montant Commande :</label>
                                                                <input type="text" id="montantCommande" name="montantCommande" class="form-control" readonly="">
                                                            </div>
                                                        </div>

                                                        <?php
                                                        $char = '0123456789';
                                                        $token_dest = '';
                                                        for ($i = 0; $i < 3; $i++) {
                                                            $token_dest .= $char[rand() % strlen($char)];
                                                        }
                                                        ?>

                                                        <input type="hidden" name="token" value="<?php echo $token_dest; ?>">


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div style="font-size: 1.2em; font-weight: bold" class="codeer"> code : <label class="text-info"><?php echo $token_dest; ?></label></div>
                                                            </div>
                                                        </div>   

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="conf_token" class="form-control" autocomplete="off" placeholder="Insérez le code ici :">
                                                            </div>
                                                        </div>                                                
                                                    </div><!-- /.form-row -->
                                                </div><!-- /.modal-body -->
                                                <!-- .modal-footer -->
                                                <div class="modal-footer">
                                                    <button name="confirVente" type="submit" class="btn btn-primary">Confirmer</button>
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                                                </div><!-- /.modal-footer -->
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                                </form><!-- /.modal -->
                                <!-- .modal -->



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

                            <script>
                                $(function () {
                                    $(".plus").click(function () {
                                        var code = $(this).attr('code');
                                        $("#codeSolde").val(code);
                                        mod(code);
                                    });
                                });

                                function mod(code) {
                                    $.ajax({
                                        url: "http://localhost:81/carte/search/commande/app",
                                        type: "POST",
                                        data: {l: 1, code: code},
                                        dataType: 'json',
                                        success: function (response) {
                                            $("#Commande").val(response.commande);
                                            $("#montantCommande").val(response.montant);
                                        }
                                    });
                                }
                            </script>


                            </body>
                            </html>