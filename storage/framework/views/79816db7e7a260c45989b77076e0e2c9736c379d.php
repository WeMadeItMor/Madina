
 
<?php $__env->startSection('content'); ?>

 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Supprimer des réalisations de Madina Transit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-remove"></i> supprimer 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
    <div class="col-lg-12">
                        <h2>Liste des Réalisation</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Supprimer</th>
                                        <th>Afficher</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $realisation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realisations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($realisations->id); ?></td>
                                        <td><?php echo e($realisations->title); ?></td>
                                        <td><?php echo e($realisations->description); ?></td>
                                        <td><?php echo e($realisations->created_at); ?></td>
                   <td><a class="btn btn-danger" href="<?php echo e(route('supprimer' , ['slug' => $realisations->slug])); ?>">Supprimer</a></td>
                    <td><a class="btn btn-success" href="<?php echo e(route('voirUn' , ['slug' => $realisations->slug])); ?>">Voir</a></td>
                                    </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                <!-- /.row -->
</div>

                <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>