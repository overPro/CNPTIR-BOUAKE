<!DOCTYPE html>
<html lang="en">
  

<head>
    
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Offre d'emplois </title>
   
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
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
              
              
 <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/carte/search/offre/emplois" method="POST" enctype="multipart/form-data">
                
           
                
<center><h1 class="page-title"> Liste des offres d'emplois </h1></center><br>
            <!-- .card -->
                    <section class="card">
                      <!-- .card-header -->
                      <header class="card-header d-flex">
                        <!-- .dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter mr-1"></i> <?php echo date('Y'); ?> </button>
                          <div class="dropdown-arrow"></div>
                        </div><!-- /.dropdown -->
                        <a href="http://localhost:81/carte/search/offre/stages" type="button" class="btn btn-primary ml-auto">Offre de stages</a>
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th style="min-width:256px"> Intitule </th>
                              <th></th>
                              <th> Type offre </th>
                              <th> Date creation </th>
                              <th> Date expiration </th>
                              <th> Nombres Poste </th>
                              <th> Statut </th>
                              <th> Actions </th>
                              
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <?php if(!empty($sol)){
                              foreach ($sol as $key => $value) {
                                ?>
                            <tr>
                              <td class="align-middle text-truncate">
                                <div class="media align-items-center">
                                  <a href="#!" class="tile bg-pink text-white mr-2">EM</a>
                                  <div class="media-body">
                                    <a href="#!"><?php echo $value['intitule']; ?></a> <small class="d-block text-muted">Code : <?php echo $value['code']; ?></small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle"></td>
                              <td class="align-middle"> <?php echo $value['type']; ?> </td>
                              <td class="align-middle"> <?php echo $value['date_creation']; ?> </td>
                              <td class="align-middle"> <?php echo $value['date_expiration']; ?> </td>
                              <td class="align-middle"> <?php echo $value['nombre_poste']; ?> </td>
                              <td class="align-middle">
                                <?php if(!empty($value['etat_offre']) and $value['etat_offre']=="Actif"){ ?>
                                  <span class="badge badge-success"> Actif</span>
                                  <?php
                                } else{

                                ?>
                                <span class="badge badge-danger"> Inactif</span>
                              </td>
                               <?php  } ?>
                              <td>
                                <a href="http://localhost:81/carte/search/offre/details&code=<?php  echo $value['code']; ?>" type="button" class="btn btn-primary" style="color: white">Details</a>
                              </td>

                             
                           
                            </tr><!-- /tr -->
                            <?php  } } ?>
                            
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </section><!-- /.card -->
          
                    <br>
                    
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
                    

 
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="http://localhost:81/carte/assets/vendor/pace/pace.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
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