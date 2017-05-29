<?php $__env->startSection('content'); ?>
    <style>

        @media  print {
            /* All your print styles go here */
            nav { display: none !important; }
            .prints { display: none !important; }
            body { margin-top: 30px;}
        }

    </style>
    <div class="row prints">
        <div class="col-lg-12 ">
            <h1 class="page-header">
                Voir les Dossiers d'exportation de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> voir dossier export
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <?php if($export->case == '3'): ?>
            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3"
                 style="border: solid;
                     background-color: yellowgreen;
                     color: firebrick;">

                <?php else: ?>

                    <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3"
                         style="border: solid;
                     background-color: #1abc9c;
                     color: #2980b9;">
                        <?php endif; ?><hr class="prints" />
                        <div class="row">
                            <div class="receipt-header">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="receipt-left">
                                        <img class="img-responsive" alt="iamgurdeeposahan" src="/asset/img/suarl.png"
                                             style="width:
                            71px; border-radius: 43px;">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                    <div class="receipt-right">
                                        <h5>Madina Transit Transport Logistique.</h5>
                                        <p>+221 33 823 38 03 - 77 532 59 53 <i class="fa fa-phone"></i></p>
                                        <p>madinatransit@gmail.com <i class="fa fa-envelope-o"></i></p>
                                        <p>29 Avenue de la Liberation, Dakar, Sénégal <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b><u>Numéro Répertoire</u> :</b>  <?php echo e($export->repertoire); ?></p>

                                        <p><b><u>Nom Destinataire</u>:</b> <?php echo e($export->nomDest); ?></p>
                                        <p><b><u>Prénom Destinataire</u> :</b> <?php echo e($export->prenomDest); ?></p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <p><b><u>Dépositaire</u> :</b></p> <h6><?php echo e($export->depositaire); ?></h6>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <table class="table table-bordered" style="color: #2980b9; ">
                                <thead>
                                <tr>
                                    <th><u>Date Ouverture dossier </u></th>
                                    <th> <?php echo e($export->created_at->format('d/m/Y')); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="col-md-9"><b><u>Nombre de Collis </u></b></td>
                                    <td class="col-md-3"><b><?php echo e($export->nbrColis); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><b><u>Nature  </u></b></td>
                                    <td class="col-md-3"><b><?php echo e($export->nature); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><b><u>Volume </u></b></td>
                                    <td class="col-md-3"><b><?php echo e($export->volume); ?></b></td>
                                </tr>

                                <tr>
                                    <td class="col-md-9"><b><u>Poids</u></b></td>
                                    <td class="col-md-3"><b><?php echo e($export->poids); ?> Kg</b></td>
                                </tr>
                                <?php if($export->case == '1'): ?>
                                    <tr>
                                        <td class="col-md-9"><b><u>Valeur Douane</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->douane); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Déclaration</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->declaration); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date déclaration</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->date->format('d/m/Y')); ?></b></td>
                                    </tr>


                                    <tr>
                                        <td class="col-md-9"><b><u>Droits Douane</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->droit); ?></b></td>
                                    </tr>
                                <?php endif; ?>


                                <?php if($export->case == '2'): ?>

                                    <tr>
                                        <td class="col-md-9"><b><u>N° Déclaration</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->declaration); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date déclaration</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->date->format('d/m/Y')); ?></b></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-9"><b><u>Valeur Douane</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->douane); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Droits Douane</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->droit); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Orbus</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->orbus); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Libelle</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->libelle); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date Payement</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->date->format('d/m/Y')); ?></b></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-9"><b><u>Date Bon à Enlever</u></b></td>
                                        <td class="col-md-3"><b><?php echo e($export->datebea->format('d/m/Y')); ?></b></td>
                                    </tr>
                                <?php endif; ?>
                                <tr>

                                    <td class="col-md-9" ><b style="color:
                        #2980b9"><strong><u>Status</u>
                                            </strong></b></td>
                                    <?php if($export->case == '2'): ?>
                                        <td class="col-md-3">   <b style="color: #16a085">Finalisé</b> </td>
                                    <?php endif; ?>
                                    <?php if($export->case == '3'): ?>
                                        <td class="col-md-3">   <b style="color: darkgoldenrod">Annulé</b> </td>
                                    <?php endif; ?>
                                    <?php if($export->case == '1'): ?>
                                        <td class="col-md-3">   <b style="color: #34495e">Déclaré</b> </td>
                                    <?php endif; ?>
                                    <?php if($export->case == '0'): ?>
                                        <td class="col-md-3">   <b style="color: #c0392b">Ouvert</b> </td>
                                    <?php endif; ?>


                                </tr>





                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid receipt-footer">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b><u>Date</u> : </b><?php echo e($export->created_at->format('d/m/Y')); ?></p>
                                        <h5 style="color: rgb(40, 130, 140);">Le meilleur du Transit!</h5>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <!-- <h1>Signature</h1> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prints">
                            <a href="<?php echo e(route('voirDossierExp')); ?>" class="btn btn-success">Retour aux dossier
                                D'exportations</a>
                            <?php if($export->case == '0'): ?>

                                <a href="<?php echo e(route('getcompleterDossierExp', ['slug'=> $export->slug])); ?>" class="btn
            btn-warning">Compléter</a>

                            <?php endif; ?>
                            <?php if($export->case == '1'): ?>

                                <a href="<?php echo e(route('getFinaliserExp' , ['slug'=> $export->slug])); ?>"  class="btn
                btn-warning">Finaliser</a>

                            <?php endif; ?>
                            
                            <?php if($export->case == '2'): ?>

                                <a href="#" onclick="window.print();" class="btn
                        btn-primary">Imprimer</a>

                            <?php endif; ?>

                            <hr/>
                        </div>


                    </div>
            </div>

            <?php if($export->case == '2'): ?>
                <div class="row prints">

                    <h2 align="center">Fichiers Joints</h2><hr/>
                    <?php if($export->quitance <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: #b2dba1">Quittance<br/>
                                <a href="/doc/<?php echo e($export->quitance); ?>"> <img src="/asset/img/pdf1.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieBl <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightgreen;">Copie B L<br/>
                                <a href="/doc/<?php echo e($export->copieBl); ?>">  <img src="/asset/img/pdf10.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieDeclaration <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightblue">Copie Déclaration<br/>
                                <a href="/doc/<?php echo e($export->copieDeclaration); ?>">  <img src="/asset/img/pdf2.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieCheque <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightgrey">Copie Chèque<br/>
                                <a href="/doc/<?php echo e($export->copieCheque); ?>" class="centered"> <img src="/asset/img/pdf3.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieBon <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightpink">Copie Bon<br/>
                                <a href="/doc/<?php echo e($export->copieBon); ?>"> <img src="/asset/img/pdf4.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieFacture <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightseagreen">Copie Facture<br/>
                                <a href="/doc/<?php echo e($export->copieFacture); ?>"> <img src="/asset/img/pdf5.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieListe <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: lightgoldenrodyellow">Copie Liste<br/>
                                <a href="/doc/<?php echo e($export->copieListe); ?>"> <img src="/asset/img/pdf6.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieNote <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: orange">Copie Note<br/>
                                <a href="/doc/<?php echo e($export->copieNote); ?>"> <img src="/asset/img/pdf7.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieCarte <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: powderblue">Copie Carte<br/>
                                <a href="/doc/<?php echo e($export->copieCarte); ?>"> <img src="/asset/img/pdf8.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                    <?php if($export->copieCMC <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: mediumpurple">Copie CMC<br/>
                                <a href="/doc/<?php echo e($export->copieCMC); ?>"> <img src="/asset/img/pdf9.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                </div>
    <?php endif; ?>
            <?php if($export->case == '0'): ?>
                <div class="row prints">

                    <h2 align="center">Fichiers Joints</h2><hr/>
                    <?php if($export->factureFour <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: #b2dba1">Facture Fournisseur<br/>
                                <a href="/doc/<?php echo e($export->factureFour); ?>"> <img src="/asset/img/pdf1.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if($export->case == '1'): ?>
                <div class="row prints">

                    <h2 align="center">Fichiers Joints</h2><hr/>
                    <?php if($export->copieCo <> '0'): ?>
                        <div class="col-lg-3 ">
                            <p class="thumbnail" style="background-color: #b2dba1">Copie CO<br/>
                                <a href="/doc/<?php echo e($export->copieCo); ?>"> <img src="/asset/img/pdf1.png"/>
                                    Voir</a></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>