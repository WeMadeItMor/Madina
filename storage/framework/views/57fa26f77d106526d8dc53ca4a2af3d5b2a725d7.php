
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route('adminhome')); ?>">Back Office Madina</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php if(Auth::check()): ?>
            <?php echo e(Auth::User()->name); ?>      <?php endif; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                       
                        
                        
                        <li>
                            <a href="<?php echo e(route('logout')); ?>"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo e(route('adminhome')); ?>"><i class="fa fa-fw fa-home"></i> Accueil </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"
                           href="#collapseMulti3"><i class="fa fa-fw fa-circle"></i> Realisations <i class="fa
                           fa-fw
                           fa-toggle-down"></i></a>
                        <ul class="sidebar-second-level collapse" id="collapseMulti3">
                            <li>
                                <a href="<?php echo e(route('ajouter')); ?>"><i class="fa fa-fw fa-plus"></i> Ajoutez une Realisation</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voir')); ?>"><i class="fa fa-fw fa-check"></i> Voir Les Realisations</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('getsupprimer')); ?>"><i class="fa fa-fw fa-remove"></i> Supprimez Realisations</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"
                           href="#collapseMulti"><i class="fa fa-fw fa-align-right"></i> Importations <i class="fa
                           fa-fw
                           fa-toggle-down"></i></a>
                        <ul class="sidebar-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="<?php echo e(route('ajoutDossier')); ?>"> <i class="fa fa-fw fa-plus"></i>  Ajouter un Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirDossierImport')); ?>"> <i class="fa fa-fw fa-plus-circle"></i>
                                    Compléter un Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirFinalDossier')); ?>">  <i class="fa fa-fw fa-check"></i>  Finaliser
                                    un
                                    Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('dossierFinals')); ?>"> <i class="fa fa-fw fa-search-minus"></i>
                                    Rechercher</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('getsupprimerFinal')); ?>"> <i class="fa fa-fw fa-remove"></i>
                                    Supprimer</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirDossierAnnule')); ?>"><i class="fa fa-fw fa-recycle"></i> Dossier
                                    Annulés
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"
                           href="#collapseMulti2"><i class="fa fa-fw fa-align-left"></i> Exportations <i class="fa
                           fa-fw
                           fa-toggle-down"></i></a>
                        <ul class="sidebar-second-level collapse" id="collapseMulti2">
                            <li>
                                <a href="<?php echo e(route('ajoutDossierExp')); ?>"> <i class="fa fa-fw fa-plus"></i>  Ajouter un
                                    Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirDossierExp')); ?>"> <i class="fa fa-fw fa-plus-circle"></i>
                                    Compléter un Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirFinalDossierExp')); ?>">  <i class="fa fa-fw fa-check"></i>
                                    Finaliser un
                                    Dossier</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('dossierFinalsExp')); ?>"> <i class="fa fa-fw fa-search-minus"></i>
                                    Rechercher</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('getsupprimerFinalExp')); ?>"> <i class="fa fa-fw fa-remove"></i>
                                    Supprimer</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voirDossierAnnuleExp')); ?>"><i class="fa fa-fw fa-recycle"></i>
                                    Dossier
                                    Annulés
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('stats')); ?>"><i class="fa fa-fw fa-pie-chart"></i> Statistiques

                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
