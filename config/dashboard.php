<?php if ($_SESSION['role'] == "medecin") { ?> 
    <!-- .app-header -->
    <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <a href="https://www.epencia.net">CNPTIR-BKE</a>
            <!--     <a href=""><img src="http://localhost:81/CNPTIR-BOUAKE/assets/images/" alt="" style="height: 32px;width: auto;"></a> -->
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->

                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">

                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown has-notified">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"><?php echo " " . $nbre; ?></span></a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <h6 class="dropdown-header stop-propagation">
                                    <span>Messages</span> <a href="#!">Vous avez <?php echo $nbre; ?> Notification(s) non lue(s).</a>
                                </h6><!-- .dropdown-scroll --> 
                                <div class="dropdown-scroll perfect-scrollbar">                                        
                                    <?php
                                    if ($nbre !== 0) {
                                        foreach ($nnl as $value) {
                                            $proprio = $notif->proprietaire_de_notification($value['notification']);
                                            $da1 = new DateTime(date('Y-m-d H:i:s'));
                                            $da2 = new DateTime($value['date']);
                                            $dif = date_diff($da1, $da2);
                                            if ($dif->format('%y') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%y an(s)');
                                            } elseif ($dif->format('%m') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%m mois');
                                            } elseif ($dif->format('%d') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%d jours');
                                            } elseif ($dif->format('%h') != 0) {
                                                $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
                                                if ($dif->format('%i') > 0) {
                                                    $difff .= ' ' . $dif->format('%i minutes');
                                                }
                                            } elseif ($dif->format('%i') > 1) {
                                                $difff = 'Il y\'a ' . $dif->format('%i minutes');
                                            } else {
                                                $difff = " À l'instant";
                                            }
                                            ?>
                                            <!-- .dropdown-item -->
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/details&nt=<?php echo $value['notification']; ?>" class="dropdown-item unread">
                                                <div class="user-avatar">
                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } else { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="dropdown-item-body">
                                                    <p class="subject">
                                                    </p>
                                                    <p class="text text-truncate"> <?php echo $value['objet'] . " - " . $proprio[0]['nom_prenom']; ?></p>
                                                    <span class="date"><?php echo $difff; ?></span>

                                                </div>
                                            </a> <!-- /.dropdown-item -->
                                            <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.dropdown-scroll -->
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="dropdown-footer">Tous les messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <!-- .nav-item -->

                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown">
                         <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($_SESSION['photo'])) { ?>
                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span>
                           <?php } else{ ?>

                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/avatar.jpg" alt=""></span>
                            <?php } ?>

                            <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button>
                        <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $_SESSION['login']; ?> </h6><a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php// echo $_SESSION['photo']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <section class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text">Tableau de bord</span></a>
                        </li>
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion" class="menu-link"><span class="menu-icon oi oi-lock-locked"></span> <span class="menu-text">Deconnexion</span></a> <!-- child menu -->
                        </li><!-- /.menu-item -->
                        
                      
                       
                        
                        <li class="menu-header">Menu Principal <?php echo $_SESSION['role']; ?> </li>


                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Dossier Medicaux</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                            <ul class="menu">

                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/medicaux/enregistrement" class="menu-link"> <span class="menu-text">Enregistrer un patient</span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li>

                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/medicaux/rechercherImprimer" class="menu-link"> <span class="menu-text">Rechercher & Imprimer </span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li>
                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/medicaux/liste" class="menu-link"> <span class="menu-text">Listes Patients </span> <span class="badge badge-subtle badge-success"></span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li>


                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->



                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-cart"></span>  <span class="menu-text">Prescription Dialyse</span><span class="badge badge-subtle badge-success">3</span></a>
                            <ul class="menu">

                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/prescription/enregistrement" class="menu-link"> <span class="menu-text">Enregistrer Prescription</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li> 
                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/prescription/rechercher" class="menu-link"> <span class="menu-text">Rechercher & Imprimer</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li>
                                <li class="menu-item ">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/prescription/listePrescription" class="menu-link"> <span class="menu-text">Listes Prescripteurs</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                                    <!-- /grand child menu -->

                                </li>

                                


                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-command"></span>  <span class="menu-text">Bilan Malade</span><span class="badge badge-subtle badge-success">3</span></a>
                            <ul class="menu">

                                <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/bilan/enregistrement" class="menu-link">Enregistrer un bilan</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/bilan/rechercher" class="menu-link">Rechercher & Imprimer</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/bilan/liste" class="menu-link">Liste Bilan</a>
                                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->



                    <!-- /.menu-item -->

                    <!-- /.menu-item -->

                    <!-- .menu-item -->
                    <!-- /.menu-item -->

                    
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-book"></span> <span class="menu-text">Mes Notifications</span><span class="badge badge-subtle badge-success">1</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="menu-link">Liste notifications</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->



                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </section><!-- /.aside-menu -->
            <!-- Skin changer -->
            <div class="aside-footer border-top p-3">
                <button class="btn btn-light btn-block" data-toggle="skin">Mode nuit <i class="fas fa-moon ml-1"></i></button>
            </div><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->
    <!-- .app-main -->
<?php } ?>


<?php if ($_SESSION['role'] == "infirmier") { ?> 
    <!-- .app-header -->
    <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <a href="https://www.epencia.net">CNPTIR-BKE</a>
            <!--     <a href=""><img src="http://localhost:81/CNPTIR-BOUAKE/assets/images/" alt="" style="height: 32px;width: auto;"></a> -->
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->

                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">

                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown has-notified">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"><?php echo " " . $nbre; ?></span></a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <h6 class="dropdown-header stop-propagation">
                                    <span>Messages</span> <a href="#!">Vous avez <?php echo $nbre; ?> Notification(s) non lue(s).</a>
                                </h6><!-- .dropdown-scroll --> 
                                <div class="dropdown-scroll perfect-scrollbar">                                        
                                    <?php
                                    if ($nbre !== 0) {
                                        foreach ($nnl as $value) {
                                            $proprio = $notif->proprietaire_de_notification($value['notification']);
                                            $da1 = new DateTime(date('Y-m-d H:i:s'));
                                            $da2 = new DateTime($value['date']);
                                            $dif = date_diff($da1, $da2);
                                            if ($dif->format('%y') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%y an(s)');
                                            } elseif ($dif->format('%m') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%m mois');
                                            } elseif ($dif->format('%d') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%d jours');
                                            } elseif ($dif->format('%h') != 0) {
                                                $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
                                                if ($dif->format('%i') > 0) {
                                                    $difff .= ' ' . $dif->format('%i minutes');
                                                }
                                            } elseif ($dif->format('%i') > 1) {
                                                $difff = 'Il y\'a ' . $dif->format('%i minutes');
                                            } else {
                                                $difff = " À l'instant";
                                            }
                                            ?>
                                            <!-- .dropdown-item -->
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/details&nt=<?php echo $value['notification']; ?>" class="dropdown-item unread">
                                                <div class="user-avatar">
                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } else { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="dropdown-item-body">
                                                    <p class="subject">
                                                    </p>
                                                    <p class="text text-truncate"> <?php echo $value['objet'] . " - " . $proprio[0]['nom_prenom']; ?></p>
                                                    <span class="date"><?php echo $difff; ?></span>

                                                </div>
                                            </a> <!-- /.dropdown-item -->
                                            <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.dropdown-scroll -->
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="dropdown-footer">Tous les messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <!-- .nav-item -->

                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown">
                        <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($_SESSION['photo'])) { ?>
                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span>
                           <?php } else{ ?>

                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/avatar.jpg" alt=""></span>
                            <?php } ?> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button>
                        <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $_SESSION['login']; ?> </h6><a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php// echo $_SESSION['photo']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <section class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">Tableau de bord</span></a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion" class="menu-link"><span class="menu-icon oi oi-lock-locked"></span> <span class="menu-text">Deconnexion</span></a> <!-- child menu -->
                        </li><!-- /.menu-item -->
                       
                       
                        

                        <li class="menu-header">Menu Principal <?php echo $_SESSION['login'] ?> </li>


                        <!-- .menu-item -->
                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-people"></span> <span class="menu-text">Dossiers Dialyse</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/dialyse/enregistrement" class="menu-link">Enregistrer Un Dossier</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/dialyse/rechercherImprimer" class="menu-link">Rechercher & Imprimer</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/dialyse/liste" class="menu-link">Liste Dossier Patient</a>
                                </li>
                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->

                        <!-- .menu-item -->
                    
                    <!-- .menu-header -->


                   <!-- /.menu-item -->
                    
                   



                    



                    


                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </section><!-- /.aside-menu -->
            <!-- Skin changer -->
            <div class="aside-footer border-top p-3">
                <button class="btn btn-light btn-block" data-toggle="skin">Mode nuit <i class="fas fa-moon ml-1"></i></button>
            </div><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->
    <!-- .app-main -->
<?php } ?>



<?php if ($_SESSION['role'] == "administrateur") { ?> 
    <!-- .app-header -->
    <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <a href="https://www.epencia.net">CNPTIR-BKE</a>
            <!--     <a href=""><img src="http://localhost:81/CNPTIR-BOUAKE/assets/images/" alt="" style="height: 32px;width: auto;"></a> -->
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->

                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">
                        <!-- .nav-item -->

                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown has-notified">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="oi oi-envelope-open"><?php echo " " . $nbre; ?></span>
                            </a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <h6 class="dropdown-header stop-propagation">
                                    <span>Messages</span> <a href="#!">Vous avez <?php echo $nbre; ?> Notification(s) non lue(s).</a>
                                </h6><!-- .dropdown-scroll -->   
                                <div class="dropdown-scroll perfect-scrollbar">
                                    <?php
                                    if ($nbre !== 0) {
                                        foreach ($nnl as $value) {
                                            $proprio = $notif->proprietaire_de_notification($value['notification']);
                                            $da1 = new DateTime(date('Y-m-d H:i:s'));
                                            $da2 = new DateTime($value['date']);
                                            $dif = date_diff($da1, $da2);
                                            if ($dif->format('%y') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%y an(s)');
                                            } elseif ($dif->format('%m') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%m mois');
                                            } elseif ($dif->format('%d') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%d jours');
                                            } elseif ($dif->format('%h') != 0) {
                                                $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
                                                if ($dif->format('%i') > 0) {
                                                    $difff .= ' ' . $dif->format('%i minutes');
                                                }
                                            } elseif ($dif->format('%i') > 1) {
                                                $difff = 'Il y\'a ' . $dif->format('%i minutes');
                                            } else {
                                                $difff = " À l'instant";
                                            }
                                            ?>

                                            <!-- .dropdown-item -->
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/details&nt=<?php echo $value['notification']; ?>" class="dropdown-item unread">
                                                <div class="user-avatar">
                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } else { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="dropdown-item-body">
                                                    <p class="subject">
                                                    </p>
                                                    <p class="text text-truncate"> <?php echo $value['objet'] . " - " . $proprio[0]['nom_prenom']; ?></p>
                                                    <span class="date"><?php echo $difff; ?></span>

                                                </div>
                                            </a> <!-- /.dropdown-item -->
                                            <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.dropdown-scroll -->
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="dropdown-footer">Tous les messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <!-- .dropdown-sheets -->
                                <div class="dropdown-sheets">
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Banque</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Prevision</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Taches</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Caisse</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Docs</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                </div><!-- .dropdown-sheets -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- /.nav-item -->
                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown">
                        <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($_SESSION['photo'])) { ?>
                               
                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span>
                           <?php } else{ ?>

                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/avatar.jpg" alt=""></span>
                            <?php } ?>

                             <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button>
                        <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $_SESSION['login']; ?> </h6><a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php// echo $_SESSION['photo']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <section class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text">Tableau de bord</span></a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion" class="menu-link"><span class="menu-icon oi oi-lock-locked"></span> <span class="menu-text">Deconnexion</span></a> <!-- child menu -->
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/boutique" class="menu-link"><span class="menu-icon oi oi-cart"></span> <span class="menu-text">Mes Boutiques</span></a> <!-- child menu -->
                        </li>
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/liste" class="menu-link"><span class="menu-icon oi oi-grid-two-up"></span> <span class="menu-text">Stages & Emplois</span></a> <!-- child menu -->
                        </li>
                        


                        <li class="menu-header">Menu Principal </li>

                        <!-- .menu-item -->
                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-people"></span> <span class="menu-text">Gestion d'utilisateurs</span><span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil" class="menu-link">Profil utilisateur</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/enregistrement" class="menu-link">Saisie des utilisateurs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/liste" class="menu-link">Liste des utilisateurs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/entreprise/enregistrement" class="menu-link">Saisie des entreprises</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/entreprise/liste" class="menu-link">Liste des entreprises</a>
                                </li>
                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->



                  <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Services Educatifs</span><span class="badge badge-subtle badge-success">2</span></a> <!-- child menu -->
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Formations</span> <span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/enregistrement" class="menu-link">Creer une formation</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/planning" class="menu-link">Planning de formations</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/suivi" class="menu-link">Formations suivies</a>
                                        </li> 
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/auditeurs" class="menu-link">Liste des auditeurs</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/listes" class="menu-link">Formations entreprises</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>

                               

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Stages & Emplois</span> <span class="badge badge-subtle badge-success">6</span></a> 
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/stages" class="menu-link">Offres de stages</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/emplois" class="menu-link">Offres d'emplois</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/souscription" class="menu-link">Postuler aux offres</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/postulants" class="menu-link">Liste des postulants</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/liste" class="menu-link">Toutes les offres</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/listes" class="menu-link">Offres entreprises</a>
                                        </li>
                                         
                                        
                                    </ul><!-- /grand child menu -->

                                </li>


                                

                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->



                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-cart"></span>  <span class="menu-text">Services Marchands</span><span class="badge badge-subtle badge-success">2</span></a>
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Ventes</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/enregistrement" class="menu-link">Creation de produits</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/campagne" class="menu-link">Campagne</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/liste" class="menu-link">Liste des produits</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/statistiques" class="menu-link">Statistiques de vente</a>
                                        </li>

                                    </ul><!-- /grand child menu -->

                                </li>

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Achats</span> <span class="badge badge-subtle badge-success">3</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/panier" class="menu-link">Mon panier</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/boutique" class="menu-link">Mes boutiques</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/statistiques" class="menu-link">Statistiques d'achats</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>


                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-command"></span>  <span class="menu-text">Services Financiers</span><span class="badge badge-subtle badge-success">2</span></a>
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Epargnes</span> <span class="badge badge-subtle badge-success">2</span></a> <!-- child menu -->
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/enregistrement" class="menu-link">Creer une epargne</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/liste" class="menu-link">Liste des epargnes</a>
                                        </li>

                                    </ul><!-- /grand child menu -->

                                </li>

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Credits</span> <span class="badge badge-subtle badge-success">2</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/enregistrement" class="menu-link">Creer un credit</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/liste" class="menu-link">Liste des credits</a>
                                        </li>
                                        
                                    </ul><!-- /grand child menu -->

                                </li>
                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Investissements</span> <span class="badge badge-subtle badge-success">2</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/enregistrement" class="menu-link">Creer un investissement</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/liste" class="menu-link">Liste des investissements</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>


                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->

<!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-aperture"></span>  <span class="menu-text">Gestion des comptes</span><span class="badge badge-subtle badge-success">4</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/enregistrement" class="menu-link">Creation de comptes</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/suivi" class="menu-link">Suivi compte</a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/liste" class="menu-link">Liste des comptes</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/CNPTIR-BOUAKE/generateur" class="menu-link">Generateur de CNPTIR-BOUAKE</a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/CNPTIR-BOUAKE/liste" class="menu-link">Liste des CNPTIR-BOUAKEs</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-table"></span><span class="menu-text">Activités Comptables</span><span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/suivi" class="menu-link">Suivi des recharges</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/suivi" class="menu-link">Suivi des epargnes</a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/suivi" class="menu-link">Suivi des credits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/suivi" class="menu-link">Suivi des investissements</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/suivi" class="menu-link">Suivi des commandes</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-suitcase"></span> <span class="menu-text">CNPTIR-BOUAKEs de recharges</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/enregistrement" class="menu-link">Creation recharges</a>
                            </li>

                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/vente" class="menu-link">Vente de recharges</a>
                            </li>

                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/imprime" class="menu-link">Imprimés recharges</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-header -->


                    <li class="menu-item has-child">
                        <a href="" class="menu-link"><span class="menu-icon oi oi-battery-full"></span>  <span class="menu-text">Mes Rechargements</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/validation" class="menu-link">CNPTIR-BOUAKE de recharge</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/transfert" class="menu-link">Transfert de fonds</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    
                   

                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-external-link"></span> <span class="menu-text">Mes Retraits d'argent</span><span class="badge badge-subtle badge-success">2</span></a> <!-- child menu -->
                        <ul class="menu">
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/transaction/demande" class="menu-link">Traitement retraits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/transaction/retraits" class="menu-link">Liste des retraits</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-book"></span> <span class="menu-text">Mes Notifications</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/forfait" class="menu-link">Achat de forfaits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/ajout" class="menu-link">Ajout de notifications</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="menu-link">Liste notifications</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->

                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </section><!-- /.aside-menu -->
            <!-- Skin changer -->
            <div class="aside-footer border-top p-3">
                <button class="btn btn-light btn-block" data-toggle="skin">Mode nuit <i class="fas fa-moon ml-1"></i></button>
            </div><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->
    <!-- .app-main -->
<?php } ?>

<?php if ($_SESSION['role'] == "Superviseur") { ?> 
    <!-- .app-header -->
    <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <a href="https://www.epencia.net">CNPTIR-BKE</a>
            <!--     <a href=""><img src="http://localhost:81/CNPTIR-BOUAKE/assets/images/" alt="" style="height: 32px;width: auto;"></a> -->
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->

                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">
                        <!-- .nav-item -->

                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown has-notified">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="oi oi-envelope-open"><?php echo " " . $nbre; ?></span>
                            </a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <h6 class="dropdown-header stop-propagation">
                                    <span>Messages</span> <a href="#!">Vous avez <?php echo $nbre; ?> Notification(s) non lue(s).</a>
                                </h6><!-- .dropdown-scroll -->   
                                <div class="dropdown-scroll perfect-scrollbar">
                                    <?php
                                    if ($nbre !== 0) {
                                        foreach ($nnl as $value) {
                                            $proprio = $notif->proprietaire_de_notification($value['notification']);
                                            $da1 = new DateTime(date('Y-m-d H:i:s'));
                                            $da2 = new DateTime($value['date']);
                                            $dif = date_diff($da1, $da2);
                                            if ($dif->format('%y') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%y an(s)');
                                            } elseif ($dif->format('%m') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%m mois');
                                            } elseif ($dif->format('%d') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%d jours');
                                            } elseif ($dif->format('%h') != 0) {
                                                $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
                                                if ($dif->format('%i') > 0) {
                                                    $difff .= ' ' . $dif->format('%i minutes');
                                                }
                                            } elseif ($dif->format('%i') > 1) {
                                                $difff = 'Il y\'a ' . $dif->format('%i minutes');
                                            } else {
                                                $difff = " À l'instant";
                                            }
                                            ?>

                                            <!-- .dropdown-item -->
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/details&nt=<?php echo $value['notification']; ?>" class="dropdown-item unread">
                                                <div class="user-avatar">
                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } else { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="dropdown-item-body">
                                                    <p class="subject">
                                                    </p>
                                                    <p class="text text-truncate"> <?php echo $value['objet'] . " - " . $proprio[0]['nom_prenom']; ?></p>
                                                    <span class="date"><?php echo $difff; ?></span>

                                                </div>
                                            </a> <!-- /.dropdown-item -->
                                            <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.dropdown-scroll -->
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="dropdown-footer">Tous les messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <!-- .dropdown-sheets -->
                                <div class="dropdown-sheets">
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Banque</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Prevision</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Taches</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Caisse</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Docs</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                </div><!-- .dropdown-sheets -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- /.nav-item -->
                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown">
                        <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($_SESSION['photo'])) { ?>
                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span>
                           <?php } else{ ?>

                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/avatar.jpg" alt=""></span>
                            <?php } ?> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $_SESSION['nom_prenom']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button>
                        <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $_SESSION['nom_prenom']; ?> </h6><a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['nom_prenom']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <section class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text">Tableau de bord</span></a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion" class="menu-link"><span class="menu-icon oi oi-lock-locked"></span> <span class="menu-text">Deconnexion</span></a> <!-- child menu -->
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/boutique" class="menu-link"><span class="menu-icon oi oi-cart"></span> <span class="menu-text">Mes Boutiques</span></a> <!-- child menu -->
                        </li>
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/liste" class="menu-link"><span class="menu-icon oi oi-grid-two-up"></span> <span class="menu-text">Stages & Emplois</span></a> <!-- child menu -->
                        </li>
                        


                        <li class="menu-header">Menu Principal </li>

                        <!-- .menu-item -->
                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-people"></span> <span class="menu-text">Gestion d'utilisateurs</span><span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil" class="menu-link">Profil utilisateur</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/enregistrement" class="menu-link">Saisie des utilisateurs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/liste" class="menu-link">Liste des utilisateurs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/entreprise/enregistrement" class="menu-link">Saisie des entreprises</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/entreprise/liste" class="menu-link">Liste des entreprises</a>
                                </li>
                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->


                  <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Services Educatifs</span><span class="badge badge-subtle badge-success">2</span></a> <!-- child menu -->
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Formations</span> <span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/enregistrement" class="menu-link">Creer une formation</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/planning" class="menu-link">Planning de formations</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/suivi" class="menu-link">Formations suivies</a>
                                        </li> 
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/auditeurs" class="menu-link">Liste des auditeurs</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/formation/listes" class="menu-link">Formations entreprises</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>

                               

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Stages & Emplois</span> <span class="badge badge-subtle badge-success">6</span></a> 
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/stages" class="menu-link">Offres de stages</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/emplois" class="menu-link">Offres d'emplois</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/souscription" class="menu-link">Postuler aux offres</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/postulants" class="menu-link">Liste des postulants</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/liste" class="menu-link">Toutes les offres</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/offre/listes" class="menu-link">Offres entreprises</a>
                                        </li>
                                         
                                        
                                    </ul><!-- /grand child menu -->

                                </li>


                                

                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->



                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-cart"></span>  <span class="menu-text">Services Marchands</span><span class="badge badge-subtle badge-success">2</span></a>
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Ventes</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/enregistrement" class="menu-link">Creation de produits</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/campagne" class="menu-link">Campagne</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/liste" class="menu-link">Liste des produits</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/produit/statistiques" class="menu-link">Statistiques de vente</a>
                                        </li>

                                    </ul><!-- /grand child menu -->

                                </li>

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Achats</span> <span class="badge badge-subtle badge-success">3</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/panier" class="menu-link">Mon panier</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/boutique" class="menu-link">Mes boutiques</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/statistiques" class="menu-link">Statistiques d'achats</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>


                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-command"></span>  <span class="menu-text">Services Financiers</span><span class="badge badge-subtle badge-success">2</span></a>
                            <ul class="menu">

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"> <span class="menu-text">Epargnes</span> <span class="badge badge-subtle badge-success">2</span></a> <!-- child menu -->
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/enregistrement" class="menu-link">Creer une epargne</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/liste" class="menu-link">Liste des epargnes</a>
                                        </li>

                                    </ul><!-- /grand child menu -->

                                </li>

                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Credits</span> <span class="badge badge-subtle badge-success">2</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/enregistrement" class="menu-link">Creer un credit</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/liste" class="menu-link">Liste des credits</a>
                                        </li>
                                        
                                    </ul><!-- /grand child menu -->

                                </li>
                                <li class="menu-item has-child">
                                    <a href="" class="menu-link"><span class="menu-text">Investissements</span> <span class="badge badge-subtle badge-success">2</span></a> 
                                    <ul class="menu">

                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/enregistrement" class="menu-link">Creer un investissement</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/liste" class="menu-link">Liste des investissements</a>
                                        </li>
                                    </ul><!-- /grand child menu -->

                                </li>


                        </li>

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->



                  <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-aperture"></span>  <span class="menu-text">Gestion des comptes</span><span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/enregistrement" class="menu-link">Creation de comptes</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/suivi" class="menu-link">Suivi compte</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/compte/liste" class="menu-link">Liste des comptes</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/CNPTIR-BOUAKE/enregistrement" class="menu-link">Creation de CNPTIR-BOUAKEs</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/CNPTIR-BOUAKE/generateur" class="menu-link">Generateur de CNPTIR-BOUAKE</a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/CNPTIR-BOUAKE/liste" class="menu-link">Liste des CNPTIR-BOUAKEs</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                   
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-table"></span><span class="menu-text">Activités Comptables</span><span class="badge badge-subtle badge-success">5</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/suivi" class="menu-link">Suivi des recharges</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/epargne/suivi" class="menu-link">Suivi des epargnes</a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/credit/suivi" class="menu-link">Suivi des credits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/investissement/suivi" class="menu-link">Suivi des investissements</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/commande/suivi" class="menu-link">Suivi des commandes</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-suitcase"></span> <span class="menu-text">CNPTIR-BOUAKEs de recharges</span> <span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/enregistrement" class="menu-link">Creation recharges</a>
                            </li>

                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/vente" class="menu-link">Vente de recharges</a>
                            </li>

                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/imprime" class="menu-link">Imprimés recharges</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-header -->


                    <li class="menu-item has-child">
                        <a href="" class="menu-link"><span class="menu-icon oi oi-battery-full"></span>  <span class="menu-text">Mes Rechargements</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/validation" class="menu-link">CNPTIR-BOUAKE de recharge</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/recharge/transfert" class="menu-link">Transfert de fonds</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    
                   

                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-external-link"></span> <span class="menu-text">Mes Retraits d'argent</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/transaction/enregistrement" class="menu-link">Saisie des retraits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/transaction/demande" class="menu-link">Traitement retraits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/transaction/retraits" class="menu-link">Liste des retraits</a>
                            </li>
                            
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon oi oi-book"></span> <span class="menu-text">Mes Notifications</span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/forfait" class="menu-link">Achat de forfaits</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/ajout" class="menu-link">Ajout de notifications</a>
                            </li>
                            <li class="menu-item">
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="menu-link">Liste notifications</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->

                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </section><!-- /.aside-menu -->
            <!-- Skin changer -->
            <div class="aside-footer border-top p-3">
                <button class="btn btn-light btn-block" data-toggle="skin">Mode nuit <i class="fas fa-moon ml-1"></i></button>
            </div><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->
    <!-- .app-main -->
<?php } if ($_SESSION['role'] == "equipe") { ?>

     <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
            <!-- .top-bar-brand -->
            <div class="top-bar-brand">
                <a href="https://www.epencia.net">CNPTIR-BKE</a>
            <!--     <a href=""><img src="http://localhost:81/CNPTIR-BOUAKE/assets/images/" alt="" style="height: 32px;width: auto;"></a> -->
            </div><!-- /.top-bar-brand -->
            <!-- .top-bar-list -->
            <div class="top-bar-list">
                <!-- .top-bar-item -->
                <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                    <!-- toggle menu -->
                    <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-full">
                    <!-- .top-bar-search -->

                </div><!-- /.top-bar-item -->
                <!-- .top-bar-item -->
                <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                    <!-- .nav -->
                    <ul class="header-nav nav">
                        <!-- .nav-item -->

                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown has-notified">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="oi oi-envelope-open"><?php echo " " . $nbre; ?></span>
                            </a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <h6 class="dropdown-header stop-propagation">
                                    <span>Messages</span> <a href="#!">Vous avez <?php echo $nbre; ?> Notification(s) non lue(s).</a>
                                </h6><!-- .dropdown-scroll -->   
                                <div class="dropdown-scroll perfect-scrollbar">
                                    <?php
                                    if ($nbre !== 0) {
                                        foreach ($nnl as $value) {
                                            $proprio = $notif->proprietaire_de_notification($value['notification']);
                                            $da1 = new DateTime(date('Y-m-d H:i:s'));
                                            $da2 = new DateTime($value['date']);
                                            $dif = date_diff($da1, $da2);
                                            if ($dif->format('%y') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%y an(s)');
                                            } elseif ($dif->format('%m') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%m mois');
                                            } elseif ($dif->format('%d') != 0) {
                                                $difff = 'Il y\'a ' . $dif->format('%d jours');
                                            } elseif ($dif->format('%h') != 0) {
                                                $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
                                                if ($dif->format('%i') > 0) {
                                                    $difff .= ' ' . $dif->format('%i minutes');
                                                }
                                            } elseif ($dif->format('%i') > 1) {
                                                $difff = 'Il y\'a ' . $dif->format('%i minutes');
                                            } else {
                                                $difff = " À l'instant";
                                            }
                                            ?>

                                            <!-- .dropdown-item -->
                                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/details&nt=<?php echo $value['notification']; ?>" class="dropdown-item unread">
                                                <div class="user-avatar">
                                                    <?php if (is_file("upload/photo/" . $proprio[0]['photo'])) { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $proprio[0]['photo']; ?>" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } else { ?>
                                                        <img src="http://localhost:81/CNPTIR-BOUAKE/upload/user.jpg" class="rounded-circle" alt="Photo" title="<?php echo $proprio[0]['nom_prenom']; ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="dropdown-item-body">
                                                    <p class="subject">
                                                    </p>
                                                    <p class="text text-truncate"> <?php echo $value['objet'] . " - " . $proprio[0]['nom_prenom']; ?></p>
                                                    <span class="date"><?php echo $difff; ?></span>

                                                </div>
                                            </a> <!-- /.dropdown-item -->
                                            <?php
                                        }
                                    }
                                    ?>
                                </div><!-- /.dropdown-scroll -->
                                <a href="http://localhost:81/CNPTIR-BOUAKE/search/notification/liste" class="dropdown-footer">Tous les messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <!-- .nav-item -->
                        <li class="nav-item dropdown header-nav-dropdown">
                            <a class="nav-link" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                <!-- .dropdown-sheets -->
                                <div class="dropdown-sheets">
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Banque</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Prevision</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Taches</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Caisse</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                    <!-- .dropdown-sheet-item -->
                                    <div class="dropdown-sheet-item">
                                        <a href="#!" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Docs</span></a>
                                    </div><!-- /.dropdown-sheet-item -->
                                </div><!-- .dropdown-sheets -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- /.nav-item -->
                    </ul><!-- /.nav -->
                    <!-- .btn-account -->
                    <div class="dropdown">
                        <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($_SESSION['photo'])) { ?>
                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""></span>
                           <?php } else{ ?>

                            <span class="user-avatar user-avatar-md"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/avatar.jpg" alt=""></span>
                            <?php } ?> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button>
                        <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php echo $_SESSION['login']; ?> </h6><a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                        </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-account -->
                </div><!-- /.top-bar-item -->
            </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="http://localhost:81/CNPTIR-BOUAKE/upload/photo/<?php //echo $_SESSION['photo']; ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['login']; ?></span> <span class="account-description"><?php echo $_SESSION['role']; ?></span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                    <!-- dropdown-items -->
                    <div class="pb-3">
                        <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil"><span class="dropdown-icon oi oi-person"></span> Mon Profil</a> <a class="dropdown-item" href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion"><span class="dropdown-icon oi oi-account-logout"></span> Deconnexion</a>
                    </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->
            <!-- .aside-menu -->
            <section class="aside-menu overflow-hidden">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu">
                    <!-- .menu -->
                    <ul class="menu">
                        <!-- .menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text">Tableau de bord</span></a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item has-active">
                            <a href="http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/deconnexion" class="menu-link"><span class="menu-icon oi oi-lock-locked"></span> <span class="menu-text">Deconnexion</span></a> <!-- child menu -->
                        </li><!-- /.menu-item -->
                        
                        
                        


                        <li class="menu-header">Menu Principal <?php echo $_SESSION['role']; ?> </li>

                        <!-- .menu-item -->
                        <li class="menu-item has-child">
                            <a href="#" class="menu-link"><span class="menu-icon oi oi-aperture"></span> <span class="menu-text">Suivie<span><span class="badge badge-subtle badge-success">3</span></a> <!-- child menu -->
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/suivi/enregistrement" class="menu-link">Enregistrer un suivi</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/suivi/rechercherImprimer" class="menu-link">Rechercher & Imprimer</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://localhost:81/CNPTIR-BOUAKE/search/suivi/liste" class="menu-link">Liste des suivis</a>
                                </li>
                                
                                
                            </ul><!-- /child menu -->
                        </li><!-- /.menu-item -->


                  <!-- /.menu-item -->




                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->


                    

                    </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->



                  <!-- .menu-item -->
                    
                    <!-- .menu-item -->
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <!-- /.menu-item -->
                    <!-- .menu-header -->


                    <!-- /.menu-item -->
                    
                   

                    <!-- .menu-item -->
                    <!-- /.menu-item -->


                    <!-- /.menu-item -->

                    </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
            </section><!-- /.aside-menu -->
            <!-- Skin changer -->
            <div class="aside-footer border-top p-3">
                <button class="btn btn-light btn-block" data-toggle="skin">Mode nuit <i class="fas fa-moon ml-1"></i></button>
            </div><!-- /Skin changer -->
        </div><!-- /.aside-content -->
    </aside>


<?php } ?>

<?php
if ($_SESSION['role'] != "administrateur" and $_SESSION['role'] != "medecin" and $_SESSION['role'] != "infirmier" and $_SESSION['role'] != "equipe") {
    session_destroy();
    echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
    exit();
}
?>