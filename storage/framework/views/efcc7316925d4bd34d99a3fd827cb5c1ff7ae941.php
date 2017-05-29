
 
<?php $__env->startSection('content'); ?>

 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajoutez des réalisations de Madina Transit
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
                    <div class="col-lg-6 col-lg-offset-3">
        <h1>Ajoutez une réalisation</h1>
                <form role="form" method="post" action="<?php echo e(route('ajouter')); ?>" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input class="form-control" name="title" value="<?php echo e(isset($realisation->title) ? $realisation->title : ''); ?>" required>
                                        <p class="help-block">Mettez un Titre correct svp...</p>
                                    </div>

                                   
                                
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image">
                                    </div>

                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea required class="form-control" rows="3" name="description"><?php echo e(isset($realisation->description) ? $realisation->description : ''); ?></textarea>
                                </div>

                                
                                <input type="hidden" name="slug" value="<?php echo e(isset($realisation->slug) ? $realisation->slug : ''); ?>" >
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
                                <button type="submit" class="btn btn-success">Ajouter</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>

                            </form>

                        </div>
                    
                    </div>
                </div>
                <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>