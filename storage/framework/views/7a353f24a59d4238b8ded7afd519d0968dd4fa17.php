<?php $__env->startSection('content'); ?>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ajoutez un Dossier d'exportation
            </h1>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> ajouter
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Ajoutez un Dossier d'exportation</h1><hr/>
        <form role="form" method="post" action="<?php echo e(route('ajoutDossierExp')); ?>" enctype="multipart/form-data">
            <div class="col-lg-4">



                <div class="form-group">
                    <label>N° Répertoire</label>
                    <input class="form-control" name="repertoire" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Nom Destinataire</label>
                    <input class="form-control" name="nomDest" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Prénom Destinataire</label>
                    <input class="form-control" name="prenomDest" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Dépositaire</label>
                    <input class="form-control" name="depositaire" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>







            </div>
            <div class="col-lg-4">

                <div class="form-group">
                    <label>Nature du Collis</label>
                    <input class="form-control" name="nature" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>

                <div class="form-group">
                    <label>Volume</label>
                    <input class="form-control" name="volume" value="" >
                    <p class="help-block" style="color: green;">Optionnel</p>

                </div>
                <div class="form-group">
                    <label>Adresse </label>
                    <input class="form-control" name="adresse" value="" >
                    <p class="help-block" style="color: green;">Optionnel</p>

                </div>
                <div class="form-group">
                    <label>Nombre de Collis</label>
                    <input class="form-control" name="nbrColis" value="" required>
                    <p class="help-block" style="color: red;">Obligatoire</p>
                </div>







            </div>
            <div class="col-lg-4">


                <div class="form-group">
                    <label>Poids</label>
                    <input class="form-control" name="poids" value="" >
                    <p class="help-block" style="color: green;">Optionnel</p>
                </div>

                <div class="form-group">
                    <label>Facture Fournisseur </label>
                    <input type="file" name="factureFour">
                </div>








            </div>



    </div>
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="slug" value="<?php echo e(isset($exports->slug) ? $exports->slug : ''); ?>" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
            <button type="submit" class="btn btn-success">Ajouter</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
    </form>
    </div>
    <!-- /.row -->












<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>