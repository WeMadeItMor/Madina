<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Liste des dossiers d'Importations de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> Tous les dossiers d'importation
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Dossiers d'importation de MTTL</h2>
            <div class="table-responsive " style="border-radius: 6px;">
                <table class="table table-hover table-bordered" id="myTable" style="border-radius: 6px;
                background-color: sandybrown;
                ">
                    <thead>
                    <tr>
                        <th>N° Répertoire</th>
                        <th>Nom Destinataire</th>
                        <th>Prénom Destinataire</th>
                        <th>Navire </th>
                        <th>Nombre de Collis </th>
                        <th>Numéro Conteneur</th>
                        <th>Etat</th>
                        <th>Action</th>
                        <th>Afficher</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $dossier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dossiers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $dossiers->case == '1' ): ?>
                                <tr class="danger">
                            <?php endif; ?>
                        <?php if( $dossiers->case == '0' ): ?>
                            <tr class="info">
                                <?php endif; ?>
                        <?php if( $dossiers->case == '2' ): ?>
                            <tr class="success">
                                <?php endif; ?>
                        <?php if( $dossiers->case == '3' ): ?>
                            <tr class="warning">
                                <?php endif; ?>
                            <td><?php echo e($dossiers->repertoire); ?></td>
                            <td><?php echo e($dossiers->nomDest); ?></td>
                            <td><?php echo e($dossiers->prenomDest); ?></td>
                            <td><?php echo e($dossiers->navire); ?></td>
                            <td><?php echo e($dossiers->nbrColis); ?></td>
                            <td><?php echo e($dossiers->numConteneur); ?></td>
                            <td>
                                    <?php if( $dossiers->case == '1' ): ?>
                                        <p style="color: red">Déclaré</p>
                                    <?php endif; ?>
                                    <?php if( $dossiers->case == '2' ): ?>
                                        <p style="color: deepskyblue">Complet</p>
                                    <?php endif; ?>
                                    <?php if( $dossiers->case == '0' ): ?>
                                        <p style="color: seagreen">Ouvert</p>
                                    <?php endif; ?>
                                    <?php if( $dossiers->case == '3' ): ?>
                                        <p style="color: darkgoldenrod">Annulé</p>
                                    <?php endif; ?>
                            </td>

                            <td>
                                <?php if( $dossiers->case == '3' ): ?>
                                <a class="btn btn-sm btn-danger" href="<?php echo e(route('supprimerFinal' , ['slug' =>
                            $dossiers->slug])); ?>">
                                    <span class="glyphicon
                            glyphicon-plus-sign"></span> Supprimer
                                </a>
                                    <?php else: ?>
                                    <a class="btn btn-sm btn-warning" href="<?php echo e(route('annulerDossier' , ['slug' =>
                            $dossiers->slug])); ?>">
                                    <span class="glyphicon
                            glyphicon-plus-sign"></span> Annuler
                                    </a>
                                    <?php endif; ?>
                            </td>
                            <td><a class="btn btn-sm btn-success" href="<?php echo e(route('voirUnImport' , ['slug' => $dossiers->slug])); ?>"><span class="glyphicon glyphicon-eye-open"></span> voir</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- /.row -->
    </div>

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6 col-lg-offset-5">

        </div>
    </div>


    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


    <script>
        /* $(document).ready(function(){
         $('#myTable').DataTable();

         });*/
        $(document).ready(function() {
            $('#myTable').DataTable( {
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            } );
        } );
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>