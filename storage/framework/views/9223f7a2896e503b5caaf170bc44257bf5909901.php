<?php $__env->startSection('content'); ?>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Finaliser un Dossier d'exportations
            </h1>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> finaliser
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Finaliser les informations du Dossier </h1><hr/>
        <form role="form" method="post" action="<?php echo e(route('finaliserDossierExp', ['slug' => $export->slug])); ?>"
              enctype="multipart/form-data">
            <div class="col-lg-4">



                <div class="form-group">
                    <label>N° orbus</label>
                    <input class="form-control" name="orbus" value="" >
                    <p class="help-block">Optionnel</p>
                </div>
                <div class="form-group">
                    <label>Libelle</label>
                    <input class="form-control" name="libelle" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Reliquat </label>
                    <input class="form-control" name="reliquat" value="" >
                    <p class="help-block">Optionnel</p>
                </div>


                <div class="form-group">
                    <label>Copie B/L </label>
                    <input type="file" name="copieBl">
                </div>
                <div class="form-group">
                    <label>Copie facture </label>
                    <input type="file" name="copieFacture">
                </div>
                <div class="form-group">
                    <label>Copie liste colissage </label>
                    <input type="file" name="copieListe">
                </div>





            </div>
            <div class="col-lg-4">

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>

                <div class="form-group">
                    <label>N° reçu</label>
                    <input class="form-control" name="reçu" value="" >
                    <p class="help-block">Optionnel</p>

                </div>
                <div class="form-group">
                    <label>Date Bon à Enlever</label>
                    <input type="date" class="form-control" name="datebea" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>


                <div class="form-group">
                    <label>Copie bon </label>
                    <input type="file" name="copieBon">
                </div>
                <div class="form-group">
                    <label>Copie chèque </label>
                    <input type="file" name="copieCheque">
                </div>
                <div class="form-group">
                    <label>Copie note de détaillé </label>
                    <input type="file" name="copieNote">
                </div>





            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>N° chèque</label>
                    <input class="form-control" name="cheque" value="" >
                    <p class="help-block">Optionnel</p>
                </div>

                <div class="form-group">
                    <label>Acompte </label>
                    <input class="form-control" name="acompte" value="" >
                    <p class="help-block">Optionnel</p>
                </div>



                <div class="form-group">
                    <label>Quittance </label>
                    <input type="file" name="quitance">
                </div>
                <div class="form-group">
                    <label>Copie déclaration  </label>
                    <input type="file" name="copieDeclaration">
                </div>
                <div class="form-group">
                    <label>Copie carte grise  </label>
                    <input type="file" name="copieCarte">
                </div>
                <div class="form-group">
                    <label>Copie cmc  </label>
                    <input type="file" name="copieCMC">
                </div>


            </div>



    </div>
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="slug" value="<?php echo e(isset($export->slug) ? $export->slug : ''); ?>" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
            <button type="submit" class="btn btn-success">Finaliser le Dossier</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
    </form>
    </div>
    <!-- /.row -->












<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>