<?php $__env->startSection('content'); ?>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Compléter un Dossier d'exportation
            </h1>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> compléter
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Compléter les informations du Dossier </h1><hr/>
        <form role="form" method="post" action="<?php echo e(route('completerDossierExp', ['slug' => $export->slug])); ?>"
              enctype="multipart/form-data">
            <div class="col-lg-4">



                <div class="form-group">
                    <label>N° Orbus</label>
                    <input class="form-control" name="orbus" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>N° Déclaration</label>
                    <input class="form-control" name="declaration" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Date Déclaration</label>
                    <input class="form-control" name="dateDeclaration" type="date" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>




            </div>
            <div class="col-lg-4">

                <div class="form-group">
                    <label>Bureau Frontière</label>
                    <input class="form-control" name="bureau" value="" >
                    <p class="help-block">Optionnel</p>
                </div>

                <div class="form-group">
                    <label>Droits de Douane</label>
                    <input class="form-control" name="droit" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>





            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Valeur Douane</label>
                    <input class="form-control" name="douane" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>








            </div>



    </div>
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="slug" value="<?php echo e(isset($export->slug) ? $export->slug : ''); ?>" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
            <button type="submit" class="btn btn-success">Compléter le Dossier</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
    </form>
    </div>
    <!-- /.row -->












<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>