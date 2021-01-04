<?php 
// connexion
$con = new PDO('mysql:host=localhost;dbname=carte_pay','root','');

$message="";

$reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";

if(isset($_GET['r']) and isset($_GET['m'])){

  $reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";
        $date = date('Y-m-d');
        $heure = date('H:i:s');

        $req = $con->prepare('INSERT INTO visiteurs VALUES (null,:date,:heure,:reference)');
        $req->bindParam(':date', $date);
        $req->bindParam(':heure', $heure);
        $req->bindParam(':reference', $_GET['r']);
        $sol = $req->execute();
        
  $req = $con->prepare('SELECT * FROM produit WHERE reference_produit=:reference and code_fournisseur=:matricule');
        $req->bindParam(':reference', $_GET['r']);
        $req->bindParam(':matricule', $_GET['m']);
        $req->execute();
        $sol = $req->fetchAll();
        if(!empty($sol)){
      $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = utf8_encode($sol[0]['photo1_produit']);
                $photo2_produit = utf8_encode($sol[0]['photo2_produit']);
                $photo3_produit = utf8_encode($sol[0]['photo3_produit']);
                $photo4_produit = utf8_encode($sol[0]['photo4_produit']) ;
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
        }
 }

if(isset($_POST['btn_panier'])){
    // generateur de code 
        $char ='0123456789';
        $code='';
        for ($i=0; $i < 4; $i++) 
        { 
            $code .= $char[rand()%strlen($char)];
        }

        $numero_commande = "COM".date('dmY').$code;

    $req = $con->prepare('SELECT * FROM carte WHERE numero_carte = :n and cvv_carte = :c');
        $req->bindParam(':n', $_POST['sai_numero_carte']);
        $req->bindParam(':c', $_POST['sai_cvv']);
        $req->execute();
        $l = $req->fetchAll();
    if(!empty($l)){
        $matricule = $l[0]['matricule'];
          $date_commande = date('Y-m-d');
    
    $req = $con->prepare('INSERT INTO commande VALUES(:numero_commande,:date_commande,:reference_produit,:prix_produit,"1",:prix_produit,"0",:prix_produit,"","0",:matricule,"En cours")');
   $req->bindParam(':date_commande',$date_commande);
   $req->bindParam(':prix_produit',$_POST['sai_prix_vente']);
   $req->bindParam(':reference_produit',$_POST['sai_reference_produit']);
   $req->bindParam(':numero_commande',$numero_commande);
   $req->bindParam(':matricule',$matricule);

   $sol = $req->execute();
   if(!empty($sol)){
    $message = "<p style='color:green'> Commande validee</p>";
   }else{
    $message = "<p style='color:red'> Echec de la commande</p>";
   }

    }else{
        $message = "<p style='color:red'> Vos informations de la carte sont incorrectes.</p>";
    }

  
}

 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Produits - Details </title>
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
        <?php include "config/menu.php"; ?>
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner page-inner-fill">
              
             
                 <div class="page-section">
                

                <!-- .section-block -->
                <div class="section-block">

                    
                  
<form enctype="multipart/form-data" action="http://localhost:81/carte/article.php" method="POST">
<center><?php echo $message; ?></center>

<div class="card">
<div class="row no-gutters">
<aside class="col-sm-5 border-right">
<article class="gallery-wrap">
<div class="img-big-wrap">
<div> <a href="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>" data-fancybox=""><img src="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
<div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>"></div>
<div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo2_produit; ?>"></div>
<div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo3_produit; ?>"></div>
<div class="item-gallery"> <img alt="image" src="http://localhost:81/carte/upload/produits/<?php echo $photo4_produit; ?>"></div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
</aside>
<aside class="col-sm-7">
<article class="p-5">
<h3 class="title mb-3"><?php echo $libelle_produit; ?></h3>

<div class="mb-3">
<var class="price h3 text-warning">
<span class="currency">F CFA  </span><span class="num"><?php if(!empty($prix_vente)) echo number_format($prix_vente, 0, ',', ' '); ?></span>
</var>
<span>/par article</span>
</div> <!-- price-detail-wrap .// -->
<dl>
<dt>Description</dt>
<dd>

<div class="form-group">

    <textarea readonly="" class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $details_produit; ?></textarea>
  </div>

</dd>

</dl>
<dl class="row">
<dt class="col-sm-3">Reference : </dt>
<dd class="col-sm-9"><?php echo $reference_produit; ?></dd>

<dt class="col-sm-3">Categorie : </dt>
<dd class="col-sm-9"><?php echo $categorie_produit; ?> </dd>

<dt class="col-sm-3">Etat : </dt>
<dd class="col-sm-9"><?php echo $etat_produit; ?> </dd>

<dt class="col-sm-3">Marchand : </dt>
<dd class="col-sm-9"><?php echo $code_fournisseur; ?> </dd>
</dl>

<input hidden="" type="text" name="sai_prix_vente" value="<?php echo $prix_vente; ?>">
<input hidden="" type="text" name="sai_reference_produit" value="<?php echo $reference_produit; ?>">
<!-- .fieldset -->
                      
                        <div class="row">
                          <!-- grid column -->
                          <div class="col-md-6">
                            <!-- .form-group -->
                            <div class="form-group">
                              <label for="sel1">Numero de carte</label>
                              <input class="custom-select" required="" type="text" name="sai_numero_carte"> 
                              
                            </div><!-- /.form-group -->
                          </div><!-- /grid column -->
                          <!-- grid column -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="sel2">CVV</label> <input class="custom-select" required="" type="text" name="sai_cvv"> 
                            </div>
                          </div><!-- /grid column -->
                        </div><!-- /grid row -->
                      
<br>

<button name="btn_panier" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i> Valider son achat </button>

</article> <!-- card-body.// -->
</aside> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- card.// -->
</form>
                   
                 </div><!-- /.page -->
        </div><!-- /.wrapper -->
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