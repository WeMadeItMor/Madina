<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="page-header">
                    Dossiers d'Exports
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                    </li>
                    <li>
                        <i class="fa fa-info"></i>  <a href="<?php echo e(route('panelExport')); ?>">Export</a>
                    </li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 ">
                <h3>Gestion des Dossiers d'exportations</h3><br/><br/>
                <a class="btn btn-block btn-success" href="">
                    <i class="fa fa-plus-circle"></i> Ajouter un nouveau Dossier
                </a> <br/><br/>
                <a class="btn btn-block  btn-success" href="">
                    <i class="fa fa-plus-circle"></i> <i class="fa fa-plus-circle"></i> Compléter un nouveau Dossier
                </a><br/><br/>
                <a class="btn btn-block btn-success" href="">
                    <i class="fa fa-check-circle-o"></i>  Finaliser un Dossier
                </a><br/><br/>


                <hr>
            </div>
            <div class="col-sm-4 ">
                <br/><br/><br/><br/><br/><br/>
                <a class="btn btn-block btn-info" href="">
                    <i class="fa fa-search-minus"></i> Rechercher un Dossier
                </a> <br/><br/>
                <a class="btn btn-block  btn-danger" href="">
                    <i class="fa fa-remove"></i> Supprimer un Dossier
                </a><br/><br/>



                <hr>
            </div>
        </div>



    </div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>