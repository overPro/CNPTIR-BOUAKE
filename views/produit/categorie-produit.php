<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Produits - Categorie </title>

    
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/epencia.net/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/epencia.net/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/fontawesome/css/all.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

    unusedLink.setAttribute('rel', '');
    unusedLink.setAttribute('disabled', true);
    
    </script><!-- END THEME STYLES -->
    
    <style>
        
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
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  
                </nav>
                <h1 class="page-title"> <center>Liste des categories d'articles</center></h1>
                <p class="text-muted"> <center>Ce tableau de bord etablit le recapitulatif et les statistiques des données du souscripteur.</center> </p>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              
              <div class="page-section">

                
                  <!-- metric row -->
                  <div class="metric-row">
                    <?php 
                                        if(!empty($sol)){
                                        foreach ($sol as $key => $value) { ?>

                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <a href="http://localhost:81/carte/search/produit/liste&categorie=<?php echo $value['categorie_produit']; ?>&matricule=<?php echo $value['code_fournisseur']; ?>" class="metric metric-bordered">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?php echo $value['nbre_article']; ?></span>
                          </p>
                          <h2 class="metric-label"> <?php echo $value['categorie_produit']; ?>  </h2>

                        </div>
                      </div><!-- /.metric -->
                      </a>
                    </div><!-- /metric column -->
                  <?php   }} ?>  
                  </div><!-- /metric row -->
                  
                </div><!-- /.section-block -->
                

               
                
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="http://localhost:81/epencia.net/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <script src="http://localhost:81/epencia.net/assets/vendor/jquery/clickwizard-plugins.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="http://localhost:81/epencia.net/assets/vendor/pace/pace.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/epencia.net/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
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