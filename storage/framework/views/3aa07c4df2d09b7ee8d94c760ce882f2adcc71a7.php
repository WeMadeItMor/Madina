
 
<?php $__env->startSection('content'); ?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Back Office de Madina
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                            </li>
                            
                        </ol>
                    </div>
</div>
                <!-- /.row -->

<div class="row">
	<div class="jumbotron col-lg-12 ">
		<div class="title">
		<?php if(Auth::check()): ?>
			<h1>Bienvenue <?php echo e(Auth::User()->name); ?></h1>

		<?php endif; ?>
			
			<p>Dans le panneau de configuration de Madina Transit vous pouvez ajouter, supprimer,visualiser les
                réalisations</p>
            <p>Mais aussi consulter ,ajoutez ou supprimer un dossier</p>
            <a class="btn btn-primary" href="<?php echo e(route('getPanel')); ?>"><i class="fa fa-fw fa-align-right"></i> Import</a>
            <a class="btn btn-success" href="<?php echo e(route('panelExport')); ?>"><i class="fa fa-fw fa-align-left"></i>
                Export</a>
		</div>





	</div>

	
		
			
					
				
			
		
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>