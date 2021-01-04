<!DOCTYPE html>
<html lang="en">
  

<head>
    
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Liste des formations des entreprises </title>
   
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
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                
                <h1 class="page-title"> Liste des formations </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      
                      

             <form action="http://localhost:81/carte/search/formation/listes" method="POST" enctype="multipart/form-data">
                
           <center>
                                    <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Superviseur" or $_SESSION['role']=="Administrateur"){  ?>
                <div class="col-12 col-lg-12">
                  <div class="form-group">
                    <fieldset>
                      <label>Code Entreprise</label> 
              <input  name="sai_matricule" type="text" class="form-control"> 
                    </fieldset>
                  </div>
         </div>
         <?php  } ?>
<?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Distributeur"){  ?>
                <div class="col-12 col-lg-12">
                  <div class="form-group">
                    <fieldset>
                      <label>Code Entreprise</label> 
              <input  readonly="" name="sai_matricule" type="text" class="form-control" value="<?php echo $_SESSION['entreprise']; ?>"> 
                    </fieldset>
                  </div>
         </div>
         <?php  } ?>

         <button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button>
                                </center>
                                <br>
                

                    <section class="card">
                      <!-- .card-header -->
                      
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th style="min-width:256px"> Modules </th>
                              <th></th>
                              <th> Date formation </th>
                              <th> Heure debut </th>
                              <th> Heure fin </th>
                              <th> Duree </th>
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
                                  <a href="#!" class="tile bg-pink text-white mr-2">FM</a>
                                  <div class="media-body">
                                    <a href="#!"><?php echo $value['module_formation']; ?></a> <small class="d-block text-muted">Code : <?php echo $value['code_formation']; ?></small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle"></td>
                              <td class="align-middle"> <?php echo $value['date_formation']; ?> </td>
                              <td class="align-middle"> <?php echo $value['heure_debut']; ?> </td>
                              <td class="align-middle"> <?php echo $value['heure_fin']; ?> </td>
                              <td class="align-middle"> <?php echo $value['duree_heure']; ?> </td>
                              <td class="align-middle">
                                <?php if(!empty($value['etat_formation']) and $value['etat_formation']=="Actif"){ ?>
                                  <span class="badge badge-success"> Actif</span>
                                  <?php
                                } else{

                                ?>
                                <span class="badge badge-alert"> Inactif</span>
                              </td>
                               <?php  } ?>
                              <td>
                                <a type="button" class="btn btn-primary" style="color: white">Details</a>
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