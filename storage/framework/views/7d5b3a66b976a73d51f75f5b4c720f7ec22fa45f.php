
 
<?php $__env->startSection('content'); ?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Voir les réalisations de Madina Transit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-check"></i> voir 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
	<div class="container">
		<h1>Details sur <?php echo e($realisation->title); ?> </h1> <br/>
			<div class="row">
            <div class="col-lg-6 thumb">
                <img class="thumbnail3" src="<?php echo e(asset('images').'/'.$realisation->imageName); ?>">
            </div>
				 <div class="col-lg-4">
                 <h3><?php echo e($realisation->title); ?> </h3>
				 		<p> <?php echo e($realisation->description); ?></p><a href="<?php echo e(route('voir')); ?>" class="btn btn-warning ">retour</a>

				 </div>
			</div>
			
		</div>
			
		
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>