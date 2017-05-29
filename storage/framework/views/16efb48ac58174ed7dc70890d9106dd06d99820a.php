


<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="container">
			<br/><h2>Nos Réalisations</h2><hr/>
		</div>
					
				</div>

	<div class="row">

		<div class="container">
		
			<div class="row">
           		 <div class="col-lg-6 thumb">
               		 	<img class="thumbnail3" src="<?php echo e(asset('images').'/'.$realisation->imageName); ?>">
           		 </div>
				 <div class="col-lg-4">
                 		<h3><?php echo e($realisation->title); ?> </h3>
				 		<p> <?php echo e($realisation->description); ?></p><a href="<?php echo e(route('realisation')); ?>" class="btn btn-warning ">retour</a>

				 </div>
			</div>
			
		</div>
	</div>	
			
			


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>