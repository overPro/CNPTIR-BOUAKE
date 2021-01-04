<!DOCTYPE html>
<html lang="en">
  
<head>
   
    <title> Epencia Pay | Liste des utilisateur entreprise </title>
    
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
                
                <h1 class="page-title"> Liste des utilisateurs </h1>
              </header><!-- /.page-title-bar -->
              

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
                      <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                 <center><?php echo $message; ?></center>     

             <form action="http://localhost:81/carte/search/utilisateur/listes" method="POST" enctype="multipart/form-data">
             	<center>
             		<?php if (!empty($_SESSION['role'])  and $_SESSION['role'] == 'Superviseur') {

           
         ?>
               <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <label>Code de l'entreprise</label> 
          <input name="sai_rechercher" type="text" class="form-control">
                </div>
                </div>
                </div> 
             <?php } ?>  
             	<?php if (!empty($_SESSION['role'])  and $_SESSION['role'] == 'Distributeur') {
         ?>
               <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <label>Code de l'entreprise</label> 
          <input readonly="" name="sai_rechercher" type="text" class="form-control" value="<?php echo $_SESSION['entreprise']; ?>">
                </div>
                </div>
                </div> 
             <?php } ?>   
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  
          <input  name="btn_rechercher" type="submit" class="btn btn-outline-danger">
                </div>
                </div>
                </div>
                </center>
                       <br>
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>
 <th>Id</th>
                                            <th>Nom et prenoms</th>
                                            <th class="login">Login</th>
                                            <th class="mdp">Mot de passe</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Matricule</th>
                                            <th>Role</th>
                                            <th class="operation">Opérations</th>
                  </tr>
                </thead>
                <tbody>
                 <?php 
                                        if(isset($sol)){
                                        foreach ($sol as $key => $value) { ?>


                                            <tr>
                                                <td><?php echo $value['id']; ?></td>
                                                <td><?php echo $value['nom_prenom']; ?></td>
                                                <td class="login"><?php echo $value['login']; ?></td>
                                                <td class="mdp"><?php echo $value['mdp']; ?></td>
                                                <td><?php echo $value['email']; ?></td>
                                                <td><?php echo $value['telephone']; ?></td>
                                                <td><?php echo $value['matricule']; ?></td>
                                                <td><?php echo $value['role']; ?></td>
                                                <td class="operation"><a class="btn btn-outline-danger" href="http://localhost:81/carte/search/utilisateur/enregistrement&login=<?php echo $value['login']; ?>">Visualiser</a></td>


                                            </tr>
                                        <?php }} ?>
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                  </form>
                      
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

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:42 GMT -->
</html>