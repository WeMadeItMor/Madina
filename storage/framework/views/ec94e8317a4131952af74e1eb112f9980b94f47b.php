<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="panel d'administration du site">
    <meta name="author" content="WeMadeItin">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>BackOffice</title>

    <!-- Bootstrap Core CSS -->
    <?php echo $__env->yieldContent('ass'); ?>
    <link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('admin/css/sb-admin.css')); ?>" rel="stylesheet">
    

    <!-- Morris Charts CSS -->
    <link href="<?php echo e(asset('admin/css/plugins/morris.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('admin/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

       <?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div id="page-wrapper">

            <div class="container-fluid">
                
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                    <?php endif; ?>

                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                    <?php endif; ?>
                    <?php echo $__env->yieldContent('content'); ?>

                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('admin/js/jquery.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo e(asset('admin/js/plugins/morris/raphael.min.js')); ?>" ></script>
    <script src=" <?php echo e(asset('admin/js/plugins/morris/morris.min.js')); ?> " ></script>
    <script src="<?php echo e(asset('admin/js/plugins/morris/morris-data.js')); ?>"></script>

</body>

</html>
