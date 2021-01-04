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
                
                <h1 class="page-title"> Liste des Dossiers medicaux</h1>
              </header><!-- /.page-title-bar -->
              <div class="page-section">
                <!-- .card -->
                <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                <button class="btn btn-primary" style="margin-left: 91%;">IMPRIMER</button>
                  <h4 class="card-title">Dossiers medicaux</h4>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Nom et Prenom</th>
                          <th>Groupe</th>
                          <th>Cr</th>
                          <th>U</th>
                          <th>Na</th>
                          <th>K</th>
                          <th>Ca</th>
                          <th>Ph</th>
                          <th>Gb</th>
                          <th>Plaq</th>
                          <th>Hb</th>
                          <th>VGM</th>
                          <th>CCMH</th>
                          <th>Crp</th>
                          <th>PT</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Nom et Prenom</th>
                          <th>Groupe</th>
                          <th>Cr</th>
                          <th>U</th>
                          <th>Na</th>
                          <th>K</th>
                          <th>Ca</th>
                          <th>Ph</th>
                          <th>Gb</th>
                          <th>Plaq</th>
                          <th>Hb</th>
                          <th>VGM</th>
                          <th>CCMH</th>
                          <th>Crp</th>
                          <th>PT</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>$324,800</td>
                          <td>$327,800</td>
                          <td>$329,800</td>
                          <td>$324,800</td>
                          <td>$328,800</td>
                          <td>$322,800</td>
                          <td>$322,800</td>
                          <td>$322,800</td>
                          <td>$322,800</td>
                        </tr>
                        
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>201/01/25</td>
                          <td>201/01/25</td>
                          <td>$12,000</td>
                          <td>$12,000</td>
                          <td>$1,000</td>
                          <td>$1,000</td>
                          <td>$1147,000</td>
                          <td>$1127000</td>
                          <td>$116,000</td>
                          <td>$112,000</td>
                          <td>$412,000</td>
                        </tr>
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