<!DOCTYPE html>
<html lang="en">
  
<head>
   
    <!-- Begin SEO tag -->
    <title> Epencia | Espace inscription </title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
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

    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(http://localhost:81/carte/assets/images/illustration/img-1.png);">
        <h1>
           <span class="sr-only">Sign Up</span>
        </h1>
        <p style="color: white"> <?php echo $message; ?> <a href="" style="color: white;text-decoration: none">Espace d'inscription</a>
        </p>
      </header><!-- form -->
      <form class="auth-form" action="http://localhost:81/carte/search/utilisateur/inscription" method="POST">

        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input name="sai_nom_prenom" type="text" id="inputUser" class="form-control" placeholder="Username" required=""> <label for="inputUser">Nom et prenoms</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input name="sai_telephone" type="text" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus=""> <label for="inputEmail">Téléphone</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input name="sai_mdp" type="text" id="inputPassword" class="form-control" placeholder="Password" required=""> <label for="inputPassword">Mot de passe</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" name="btn_ajouter">Valider</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
           <a href="http://localhost:81/carte/search/utilisateur/connexion" class="custom-control-label" for="newsletter">Se connecter</a>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © <?php echo date('Y'); ?> Tous les droits reservés au <a href="#!">Group Epencia</a> </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="http://localhost:81/carte/assets/vendor/particles.js/particles.min.js"></script>
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', 'http://localhost:81/carte/assets/javascript/pages/particles.json');
      })
    </script> <!-- END PLUGINS JS -->
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

<!-- Mirrored from uselooper.com/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:02 GMT -->
</html>