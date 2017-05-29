<?php $__env->startSection('ass'); ?>

    <?php echo Charts::assets(); ?>



    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Statistique de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-pie-chart"></i> Statistique
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Statistique sur l'Importation</h1> <hr/>
        <div class="col-lg-6 ">



                <?php echo $chart->render(); ?>



        </div>
       <div class="col-lg-6 ">



            <?php echo $chart2->render(); ?>



        </div>
        <div class="col-lg-6 ">



            <?php echo $chart3->render(); ?>



        </div>

    </div><hr/>
    <div class="row">
        <h1>Statistique sur l'exportation</h1> <hr/>
       

    </div>

    <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>