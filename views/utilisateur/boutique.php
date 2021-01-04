<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia | Categorie - Articles </title>
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->

    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/ecommerce/ecommerce.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/tributejs/tribute.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/simplemde/simplemde.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
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
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              
                 <div class="page-section">
<form method="POST" action="http://localhost:81/carte/search/utilisateur/boutique">
                 	<!-- grid row -->
                  <div class="row mb-4">
                    <!-- .col -->
                    <div class="col">
                      <!-- .has-clearable -->
                      <div class="has-clearable">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"></span></button> 
                        <select class="form-control" name="sai_rechercher">
                        	<option>Choisir la categorie</option>
                        	 <?php if(!empty($result)){
 	foreach ($result as $key => $value) {
 		?>
 		<option value="<?php echo $value['categorie_produit']; ?>"><?php echo $value['categorie_produit']; ?></option>
 		<?php  }} ?>
                        </select>
                      </div><!-- /.has-clearable -->
                    </div><!-- /.col -->
                    <!-- .col-auto -->
                    <div class="col-auto">
                      <!-- invite members -->
                      <div class="dropdown">
                        <button name="btn_rechercher" class="btn btn-primary" data-display="static" aria-haspoppup="true" aria-expanded="false"><i class="fas fa-user-plus mr-1"></i> Rechercher</button>
                        
                      </div><!-- /invite members -->
                    </div><!-- /.col-auto -->
                  </div><!-- /grid row -->
               
                <div class="row">
 <?php if(!empty($sol)){
    //var_dump($sol);
 	foreach ($sol as $key => $value) {
 		?>

  <aside class="col-md-4">
    
<br><br>

<div id="code_banner2">
<?php 
    if (!empty($value['photo'])) { ?>
      <div class="card-banner" style="height:250px; background-image: url('http://localhost:81/carte/upload/categorie/<?php echo $value['photo']; ?>');">
   <article class="overlay bottom text-center">
      <h5 class="card-title"><?php echo "Chez"." ".$value['nom_prenom']; ?></h5>
      <a href="http://localhost:81/carte/search/produit/categorie&matricule=<?php echo $value['matricule']; ?>" class="btn btn-warning btn-sm"> Entrez ici </a>
   </article>
</div> <!-- card.// -->
<?php } else{ ?>
<div class="card-banner" style="height:250px; background-image: url('http://localhost:81/carte/upload/categorie/boutique.jpg');">
   <article class="overlay bottom text-center">
      <h5 class="card-title"><?php echo "Chez"." ".$value['nom_prenom']; ?></h5>
      <a href="http://localhost:81/carte/search/produit/categorie&matricule=<?php echo $value['matricule']; ?>" class="btn btn-warning btn-sm"> Entrez ici </a>
   </article>
</div> <!-- card.// -->
<?php } ?>
</div> <!-- code wrap.// -->

  </aside>
 
  <?php  } } ?>
</div> <!-- row.// -->

<br><br>

</form>

    
          </div><!-- /.page -->
        </div><!-- /.wrapper -->
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