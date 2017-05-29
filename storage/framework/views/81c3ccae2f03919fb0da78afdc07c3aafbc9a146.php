<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="container">
            <br/><h2>Nos Réalisations</h2><hr/>
        </div>

    </div>

    <div class="row">

        <div class="container">

            <?php $__currentLoopData = $realisation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail2" href="<?php echo e(route('voirReal', ['slug' => $realisations->slug])); ?>">
                        <img src="<?php echo e(asset('images').'/'.$realisations->imageName); ?>">
                    </a>&nbsp;<p><?php echo e($realisations->title); ?></p>
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
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>