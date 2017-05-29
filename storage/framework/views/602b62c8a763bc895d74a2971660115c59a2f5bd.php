

<?php $__env->startSection('content'); ?>
<p align="center"><h1 style="color: white;text-align: center">Panel d'administration de Madina Transit</h1></p>


                    <div class="col-lg-6 col-lg-offset-3">
                        <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                        <?php endif; ?>
                    </div>

      <div class="form-signin">
    <div class="text-center">
      
      <h1>Veuillez vous connecter</h1>
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="<?php echo e(route('signin')); ?>" method="post">
                <p class="text-muted text-center" style="color: black;">
                    Entrer votre Login et Mot de passe
                </p>
                <input type="text" placeholder="Email" name="email" class="form-control " required>
                <input type="password" placeholder="Mot de passe" name="password" class="form-control" required>
                <div class="checkbox">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
		  
		</div>
                <button class="btn btn-lg btn-primary btn-block" style="background-color: #34495e; border-color: #34495e;" type="submit">Connexion</button>
            </form>
        </div>
        
        <div id="signup" class="tab-pane">
            <form action="<?php echo e(route('register')); ?>" method="post">
            <p class="text-muted text-center">Entrer vos Identifiants</p>
               <input type="text" placeholder="votre nom" class="form-control " name="name" required>
                <input type="email" name="email" placeholder="votre email" class="form-control " required>
                <input type="password" name="password" placeholder="votre Mot de Passe" class="form-control " required>
                
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
                <button class="btn btn-lg btn-success btn-block" type="submit">S'inscrire</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="<?php echo e(route('home')); ?>" >Retour au Site</a></li>
           <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>
<p align="center"><h4 style="color: grey/*rgba(255, 114, 0, 0.75)*/ ;text-align: center">Powered by WeMadeItin</h4></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/user/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>