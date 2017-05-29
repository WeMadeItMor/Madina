
 
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
	
	<div class="col-lg-12">
                <h1 class="page-header">Liste des Réalisations</h1>
            </div>
<?php $__currentLoopData = $realisation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail2" href="<?php echo e(route('voirUn', ['slug' => $realisations->slug])); ?>">
                    <img src="<?php echo e(asset('images').'/'.$realisations->imageName); ?>">	
                </a>
            </div>
            
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



	</div>	
	 
     <div class="row">
             <div class="col-lg-6 col-lg-offset-5">
         <?php echo e($realisation->links()); ?>

     </div> 
     </div>
    	
		
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>