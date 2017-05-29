<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Voir les dossiers d'Importations de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="<?php echo e(route('adminhome')); ?>">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> Dossiers Ouverts
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Liste des Dossiers d'importation ouverts</h2>
            <div class="table-responsive " style="border-radius: 6px;">
                <table class="table table-hover table-responsive" id="myTable" style="border-radius: 6px;
                background-color: lightgoldenrodyellow;">
                    <thead>
                    <tr>
                        <th>N° Répertoire</th>
                        <th>Nom Destinataire</th>
                        <th>Prénom Destinataire</th>

                        <th>Nom Envoyeur</th>

                        <th>Compléter</th>
                        <th>Afficher</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $dossier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dossiers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($dossiers->repertoire); ?></td>
                            <td><?php echo e($dossiers->nomDest); ?></td>
                            <td><?php echo e($dossiers->prenomDest); ?></td>
                            <td><?php echo e($dossiers->nomEnvoyeur); ?></td>

                            <td><a class="btn btn-sm btn-warning" href="<?php echo e(route('getcompleterDossierImport' , ['slug'
                            => $dossiers->slug])); ?>"><span class="glyphicon glyphicon-plus-sign"></span> Compléter</a></td>
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