<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>
    
    <meta name="description" content="dashboard">
    <meta name="author" content="">
    
    
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/lib/bootstrap/css/bootstrap.css')); ?>" >
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/lib/font-awesome/css/font-awesome.css')); ?>">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main.css')); ?> ">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href=" <?php echo e(asset('admin/assets/lib/metismenu/metisMenu.css')); ?>">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href=" <?php echo e(asset('admin/assets/lib/animate.css/animate.css')); ?> ">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">






<?php echo $__env->yieldContent('content'); ?>


    <!--jQuery -->
    <script src="<?php echo e(asset('admin/assets/lib/jquery/jquery.js')); ?>"></script>

    <!--Bootstrap -->
    <script src=" <?php echo e(asset('admin/assets/lib/bootstrap/js/bootstrap.js')); ?> "></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

</html>
