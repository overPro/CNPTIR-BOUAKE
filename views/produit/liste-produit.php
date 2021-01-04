<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Produits - Liste </title>
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
                

                <!-- .section-block -->
                <div class="section-block">
                  <h3  class="subtitle-doc"><?php if(!empty($categorie_produit)){ echo $categorie_produit;} ?>
	
</h3>

<div id="code_prod2">
<div class="row">
	<?php if(!empty($sol)){
		foreach ($sol as $key => $value) {

		 ?>
<div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap">
                    <?php if (in_array($value['reference_produit'], $sponsor)) { ?>
                                                                    <span class="ribbons" style="background-color: red; color: white!important; font-weight: bold; padding: 1%; border-radius: 4px 4px 4px 4px; margin-left: 65%"><span class="onsale ribbon">Sponsorisé</span></span>
                                                                    <?php } ?>
			<img src="http://localhost:81/carte/upload/produits/<?php echo $value['photo1_produit']; ?>">
			<a class="btn-overlay" href="http://localhost:81/carte/search/produit/details&reference=<?php echo $value['reference_produit']; ?>&matricule=<?php echo $value['code_fournisseur']; ?>"><i class="fa fa-search-plus"></i> Details</a>
		</div>
		<figcaption class="info-wrap">
			<a href="#" class="title"><?php echo $value['libelle_produit']; ?></a>
			<div class="action-wrap">
				<a href="http://localhost:81/carte/search/produit/details&reference=<?php echo $value['reference_produit']; ?>" class="btn btn-primary btn-sm float-right"> Acheter </a>
				<div class="price-wrap h5">
					<span class="price-new">F <?php if(!empty($value['prix_vente'])){ echo number_format($value['prix_vente'], 0, ',', ' ');}  ?></span>
					
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->

<?php } } else{

 ?>

 <div class="page-section">
               
                <section>
  <div class="row">
    <div class="col-12 col-lg-12">
      <center>
    <img src="http://localhost:81/carte/upload/produits/empty-cart.png">
    <br><br>
    <div class="color-default-700 -fs-22 -b -pbxl">Votre panier est vide !</div>
    <div class="cms color-default-900 -fs-17 -pbxl">Explorez nos catégories et découvrez nos meilleures offres!</div> 
    
    <a href="http://localhost:81/carte/search/produit/liste" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Commencez vos achats</a>
  </div>
    </center>
     </div>
  </div>
</section>


</div> <!-- row.// -->
    
          </div><!-- /.page -->


<?php } ?>
</div> <!-- row.// -->
</div> <!-- code-wrap.// -->
                   
                 </div><!-- /.page -->
        </div><!-- /.wrapper -->
    
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