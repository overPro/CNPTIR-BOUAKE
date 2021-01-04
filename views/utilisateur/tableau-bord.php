<?php //var_dump($_SESSION); die(); ?>
<!DOCTYPE html>
<html lang="fr">
  

<head>
    
    <!-- Begin SEO tag -->
    <title> Epencia Pays | Tableau de bord </title>

    
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
              
              <div class="page-section">

                <!-- .section-block -->
                <?php  if($_SESSION['role'] == 'infirmier'){ ?>
                <div class="section-block">
                  <nav aria-label="breadcrumb"  style="background-color:rgb(25,45,125); height: 150%; font-size: 145%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="width: 100%">
        <marquee behavior="alternate">Soyez la bienvenue <?php echo $_SESSION['login']; ?> !&nbsp;&nbsp;&nbsp;Vous êtes connecté(e) en tant que <?php echo $_SESSION['role']; ?></marquee>
        </li>
    </ul>
</nav>

                  <!-- metric row -->
                  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <h1></h1>
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value"><?php if(!empty( $Rechargement[0]['somme'])){ echo  $Rechargement[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de dossier Dialyse </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <!-- /metric column -->
                    <!-- metric column -->
                    <!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-timer"></i></sub> <span class="value"><?php if(!empty( $Frais[0]['somme'])){ echo  $Frais[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Totaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                </div><!-- /.section-block -->
                
<?php } if($_SESSION['role'] == 'medecin'){?>
  <div class="section-block">
                  <nav aria-label="breadcrumb"  style="background-color:rgb(25,45,125); height: 150%; font-size: 145%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="width: 100%">
        <marquee behavior="alternate">Soyez la bienvenue <?php echo $_SESSION['login']; ?> !&nbsp;&nbsp;&nbsp;Vous êtes connecté(e) en tant que <?php echo $_SESSION['role']; ?></marquee>
        </li>
    </ul>
</nav>

  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <h1></h1>
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value"><?php if(!empty( $Rechargement[0]['somme'])){ echo  $Rechargement[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de Bilan </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-fork"></i></sub> <span class="value"><?php if(!empty( $Abonnement[0]['nombre'])){ echo  $Abonnement[0]['nombre'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de Prescription Dialyse </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?php if(!empty( $Retrait[0]['somme'])){ echo  $Retrait[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de dossier medicaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-timer"></i></sub> <span class="value"><?php if(!empty( $Frais[0]['somme'])){ echo  $Frais[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Totaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                </div>
              <?php } if($_SESSION['role'] == 'administrateur'){?> ?>
              <div class="section-block">
                  <nav aria-label="breadcrumb"  style="background-color:rgb(25,45,125); height: 150%; font-size: 145%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="width: 100%">
        <marquee behavior="alternate">Soyez la bienvenue <?php echo $_SESSION['login']; ?> !&nbsp;&nbsp;&nbsp;Vous êtes connecté(e) en tant que <?php echo $_SESSION['role']; ?></marquee>
        </li>
    </ul>
</nav>

  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <h1></h1>
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value"><?php if(!empty( $Rechargement[0]['somme'])){ echo  $Rechargement[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de dossier Dialyse </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-fork"></i></sub> <span class="value"><?php if(!empty( $Abonnement[0]['nombre'])){ echo  $Abonnement[0]['nombre'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de Prescription Dialyse </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?php if(!empty( $Retrait[0]['somme'])){ echo  $Retrait[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de dossier medicaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-timer"></i></sub> <span class="value"><?php if(!empty( $Frais[0]['somme'])){ echo  $Frais[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Totaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                </div>

<?php } if($_SESSION['role'] == 'equipe'){ ?>
   <div class="section-block">
                  <nav aria-label="breadcrumb"  style="background-color:rgb(25,45,125); height: 150%; font-size: 145%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="width: 100%">
        <marquee behavior="alternate">Soyez la bienvenue <?php echo $_SESSION['login']; ?> !&nbsp;&nbsp;&nbsp;Vous êtes connecté(e) en tant que <?php echo $_SESSION['role']; ?></marquee>
        </li>
    </ul>
</nav>

  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <h1></h1>
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value"><?php if(!empty( $Rechargement[0]['somme'])){ echo  $Rechargement[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Nombre de suivis </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <!-- /metric column -->
                    <!-- metric column -->
                    <!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-6 col-lg-3">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-timer"></i></sub> <span class="value"><?php if(!empty( $Frais[0]['somme'])){ echo  $Frais[0]['somme'];}else{ echo 0; } ?></span>
                          </p>
                          <h2 class="metric-label"> Totaux </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                  <!-- metric row -->
                  <!-- /metric row -->
                </div>

<?php } ?>

 
               
                
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