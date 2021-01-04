<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Datatables | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Datatables">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Datatables",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="http://localhost:81/CNPTIR-BOUAKE/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

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
                
                <h1 class="page-title"> Liste des dossiers dialyse</h1>
              </header><!-- /.page-title-bar -->
              <div class="page-section">
                <!-- .card -->
                <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                <button class="btn btn-primary" style="margin-left: 91%;">IMPRIMER</button>
                  <h4 class="card-title">SUIVIS</h4>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>nom_prenom</th>
                          <th>bain</th>
                          <th>grp_rh</th>
                          <th>generateur</th>
                          <th>temperature</th>
                          <th>dialyseur</th>
                          <th>conductivite</th>
                          <th>aiguille</th>
                          <th>electro_champ</th>
                          <th>heparine</th>
                          <th>debit_de_dialyse</th>
                          <th>poid_theorique</th>
                          <th>connexion_lignes</th>
                          <th>medecin1</th>
                          <th>medecin2</th>
                          <th>infirmier1</th>
                          <th>infirmier2</th>
                          <th>aide_soignant1</th>
                          <th>aide_soignant2</th>
                          <th>heure1</th>
                          <th>heure2</th>
                          <th>poids_prise1</th>
                          <th>poids_perte</th>
                          <th>uf_demandee</th>
                          <th>uf_obtenue</th>
                          <th>ta1</th>
                          <th>pouls</th>
                          <th>ta2 </th>
                          <th>pouls2</th>
                          <th>temperature1</th>
                          <th>temperature2</th>
                          <th>heure_tab1</th>
                          <th>heure_tab2</th>
                          <th>heure_tab3</th>
                          <th>heure_tab4</th>
                          <th>heure_tab5</th>
                          <th>heure_tab6</th>
                          <th>heure_tab7</th>
                          <th>hep1</th>
                          <th>hep2</th>
                          <th>hep3</th>
                          <th>hep4</th>
                          <th>hep5</th>
                          <th>hep6</th>
                          <th>hep7</th>
                          <th>ta_tab1</th>
                          <th>ta_tab2</th>
                          <th>ta_tab3</th>
                          <th>ta_tab4</th>
                          <th>ta_tab5</th>
                          <th>ta_tab6</th>
                          <th>ta_tab7</th>
                          <th>pompe1</th>
                          <th>pompe2</th>
                          <th>pompe3</th>
                          <th>pompe4</th>
                          <th>pompe5</th>
                          <th>pompe6</th>
                          <th>pompe7</th>
                          <th>pv1</th>
                          <th>pv2</th>
                          <th>pv3</th>
                          <th>pv4</th>
                          <th>pv5</th>
                          <th>pv6</th>
                          <th>pv7</th>
                          <th>uf_dem1</th>
                          <th>uf_dem2</th>
                          <th>uf_dem3</th>
                          <th>uf_dem4</th>
                          <th>uf_dem5</th>
                          <th>uf_dem6</th>
                          <th>uf_dem7</th>
                          <th>uf_obt1</th>
                          <th>uf_obt2</th>
                          <th>uf_obt3</th>
                          <th>uf_obt4</th>
                          <th>uf_obt5</th>
                          <th>uf_obt6</th>
                          <th>uf_obt7</th>
                          <th>observation1</th>
                          <th>observation2</th>
                          <th>observation3</th>
                          <th>observation4</th>
                          <th>observation5</th>
                          <th>observation6</th>
                          <th>observation7</th>
                          <th>prescription</th>
                          <th>observation_general</th>
                          <th>numero_patient</th>
                          <th>groupe</th>
                          
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                             
                          <th>nom_prenom</th>
                          <th>bain</th>
                          <th>grp_rh</th>
                          <th>generateur</th>
                          <th>temperature</th>
                          <th>dialyseur</th>
                          <th>conductivite</th>
                          <th>aiguille</th>
                          <th>electro_champ</th>
                          <th>heparine</th>
                          <th>debit_de_dialyse</th>
                          <th>poid_theorique</th>
                          <th>connexion_lignes</th>
                          <th>medecin1</th>
                          <th>medecin2</th>
                          <th>infirmier1</th>
                          <th>infirmier2</th>
                          <th>aide_soignant1</th>
                          <th>aide_soignant2</th>
                          <th>heure1</th>
                          <th>heure2</th>
                          <th>poids_prise1</th>
                          <th>poids_perte</th>
                          <th>uf_demandee</th>
                          <th>uf_obtenue</th>
                          <th>ta1</th>
                          <th>pouls</th>
                          <th>ta2 </th>
                          <th>pouls2</th>
                          <th>temperature1</th>
                          <th>temperature2</th>
                          <th>heure_tab1</th>
                          <th>heure_tab2</th>
                          <th>heure_tab3</th>
                          <th>heure_tab4</th>
                          <th>heure_tab5</th>
                          <th>heure_tab6</th>
                          <th>heure_tab7</th>
                          <th>hep1</th>
                          <th>hep2</th>
                          <th>hep3</th>
                          <th>hep4</th>
                          <th>hep5</th>
                          <th>hep6</th>
                          <th>hep7</th>
                          <th>ta_tab1</th>
                          <th>ta_tab2</th>
                          <th>ta_tab3</th>
                          <th>ta_tab4</th>
                          <th>ta_tab5</th>
                          <th>ta_tab6</th>
                          <th>ta_tab7</th>
                          <th>pompe1</th>
                          <th>pompe2</th>
                          <th>pompe3</th>
                          <th>pompe4</th>
                          <th>pompe5</th>
                          <th>pompe6</th>
                          <th>pompe7</th>
                          <th>pv1</th>
                          <th>pv2</th>
                          <th>pv3</th>
                          <th>pv4</th>
                          <th>pv5</th>
                          <th>pv6</th>
                          <th>pv7</th>
                          <th>uf_dem1</th>
                          <th>uf_dem2</th>
                          <th>uf_dem3</th>
                          <th>uf_dem4</th>
                          <th>uf_dem5</th>
                          <th>uf_dem6</th>
                          <th>uf_dem7</th>
                          <th>uf_obt1</th>
                          <th>uf_obt2</th>
                          <th>uf_obt3</th>
                          <th>uf_obt4</th>
                          <th>uf_obt5</th>
                          <th>uf_obt6</th>
                          <th>uf_obt7</th>
                          <th>observation1</th>
                          <th>observation2</th>
                          <th>observation3</th>
                          <th>observation4</th>
                          <th>observation5</th>
                          <th>observation6</th>
                          <th>observation7</th>
                          <th>prescription</th>
                          <th>observation_general</th>
                          <th>numero_patient</th>
                          <th>groupe</th>
                          
                        
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php if($liste){
                          foreach ($liste as  $value) {
                           
                            
                          







                         ?>
                         <tr>
                          <td><?php echo  $value['nom_prenom']; ?></td>
                          <td><?php echo $value['bain']; ?></td>
                          <td><?php echo $value['grp_rh']; ?></td>
                          <td><?php echo $value['generateur']; ?></td>
                          <td><?php echo $value['temperature']; ?></td>
                          <td><?php echo $value['dialyseur']; ?></td>
                          <td><?php echo $value['conductivite']; ?></td>
                          <td><?php echo $value['aiguille']; ?></td>
                          <td><?php echo $value['electro_champ']; ?></td>
                          <td><?php echo $value['heparine']; ?></td>
                          <td><?php echo $value['debit_de_dialyse']; ?></td>
                          <td><?php echo $value['poid_theorique']; ?></td>
                          <td><?php echo $value ['connexion_lignes']; ?></td>
                          <td><?php echo $value['medecin1']; ?></td>
                          <td><?php echo $value['medecin2']; ?></td>
                          <td><?php echo $value['infirmier1']; ?></td>
                          <td><?php echo $value['infirmier2']; ?></td>
                          <td><?php echo $value['aide_soignant1']; ?></td>
                          <td><?php echo $value['aide_soignant2']; ?></td>
                          <td><?php echo $value['heure1']; ?></td>
                          <td><?php echo $value['heure2']; ?></td>
                          <td><?php echo $value['poids_prise1']; ?></td>
                          <td><?php echo $value['poids_perte']; ?></td>
                          <td><?php echo $value['uf_demandee']; ?></td>
                          <td><?php echo $value['uf_obtenue']; ?></td>
                          <td><?php echo $value['ta1']; ?></td>
                          <td><?php echo $value['pouls']; ?></td>
                          <td><?php echo $value['ta2']; ?> </td>
                          <td><?php echo $value['pouls2']; ?></td>
                          <td><?php echo $value['temperature1']; ?></td>
                          <td><?php echo $value['temperature2']; ?></td>
                          <td><?php echo $value['heure_tab1']; ?></td>
                          <td><?php echo $value['heure_tab2']; ?></td>
                          <td><?php echo $value['heure_tab3']; ?></td>
                          <td><?php echo $value['heure_tab4']; ?></td>
                          <td><?php echo $value['heure_tab5']; ?></td>
                          <td><?php echo $value['heure_tab6']; ?></td>
                          <td><?php echo $value['heure_tab7']; ?></td>
                          <td><?php echo $value['hep1']; ?></td>
                          <td><?php echo $value['hep2']; ?></td>
                          <td><?php echo $value['hep3']; ?></td>
                          <td><?php echo $value['hep4']; ?></td>
                          <td><?php echo $value['hep5']; ?></td>
                          <td><?php echo $value['hep6']; ?></td>
                          <td><?php echo $value['hep7']; ?></td>
                          <td><?php echo $value['ta_tab1']; ?></td>
                          <td><?php echo $value['ta_tab2']; ?></td>
                          <td><?php echo $value['ta_tab3']; ?></td>
                          <td><?php echo $value['ta_tab4']; ?></td>
                          <td><?php echo $value['ta_tab5']; ?></td>
                          <td><?php echo $value['ta_tab6']; ?></td>
                          <td><?php echo $value['ta_tab7']; ?></td>
                          <td><?php echo $value['pompe1']; ?></td>
                          <td><?php echo $value['pompe2']; ?></td>
                          <td><?php echo $value['pompe3']; ?></td>
                          <td><?php echo $value['pompe4']; ?></td>
                          <td><?php echo $value['pompe5']; ?></td>
                          <td><?php echo $value['pompe6']; ?></td>
                          <td><?php echo $value['pompe7']; ?></td>
                          <td><?php echo $value['pv1']; ?></td>
                          <td><?php echo $value['pv2']; ?></td>
                          <td><?php echo $value['pv3']; ?></td>
                          <td><?php echo $value['pv4']; ?></td>
                          <td><?php echo $value['pv5']; ?></td>
                          <td><?php echo $value['pv6']; ?></td>
                          <td><?php echo $value['pv7']; ?></td>
                          <td><?php echo $value['uf_dem1']; ?></td>
                          <td><?php echo $value['uf_dem2']; ?></td>
                          <td><?php echo $value['uf_dem3']; ?></td>
                          <td><?php echo $value['uf_dem4']; ?></td>
                          <td><?php echo $value['uf_dem5']; ?></td>
                          <td><?php echo $value['uf_dem6']; ?></td>
                          <td><?php echo $value['uf_dem7']; ?></td>
                          <td><?php echo $value['uf_obt1']; ?></td>
                          <td><?php echo $value['uf_obt2']; ?></td>
                          <td><?php echo $value['uf_obt3']; ?></td>
                          <td><?php echo $value['uf_obt4']; ?></td>
                          <td><?php echo $value['uf_obt5']; ?></td>
                          <td><?php echo $value['uf_obt6']; ?></td>
                          <td><?php echo $value['uf_obt7']; ?></td>
                          <td><?php echo $value['observation1']; ?></td>
                          <td><?php echo $value['observation2']; ?></td>
                          <td><?php echo $value['observation3']; ?></td>
                          <td><?php echo $value['observation4']; ?></td>
                          <td><?php echo $value['observation5']; ?></td>
                          <td><?php echo $value['observation6']; ?></td>
                          <td><?php echo $value['observation7']; ?></td>
                          <td><?php echo $value['prescription']; ?></td>
                          <td><?php echo $value['observation_general']; ?></td>
                          <td><?php echo $value['numero_patient']; ?></td>
                          <td><?php echo $value['groupe']; ?></td>
                          
                       
                          
                        </tr>
                        <?php }} ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
               <!-- /.card -->

              </div>

                    <!-- .card -->
                    <!-- /.card -->

 
        
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
   <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <script src="http://localhost:81/CNPTIR-BOUAKE/assets/datatables/datatables.min.js"></script>
    <!-- BEGIN PLUGINS JS -->
    <!-- <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/pace/pace.min.js"></script> -->
    <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <!-- <script src="http://localhost:81/CNPTIR-BOUAKE/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
    
    <!--  -->
     <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/CNPTIR-BOUAKE/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    
    <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script >
    $(document).ready(function() {
      $('#basic-datatables').DataTable({
      });

      $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
          this.api().columns().every( function () {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
                );

              column
              .search( val ? '^'+val+'$' : '', true, false )
              .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
              select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
          } );
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
          ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
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

<!-- Mirrored from uselooper.com/table-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:22:14 GMT -->
</html>