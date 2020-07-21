<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Exibindo <?php echo e($cats->count()); ?> Nephelometro de <?php echo e($cats->total()); ?> 
            ( <?php echo e($cats->firstItem()); ?> a <?php echo e($cats->lastItem()); ?> )</h5>
    <?php if(count($cats) > 0): ?>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Coeficiente</th>
                        <th>Temp. do ar</th>
                        <th>Temp Cell </th>
                        <th>RH</th>
                        <th>Pressão</th>                    
                        <th>Ações</th>
                    </tr>
                </thead>   
                <tbody>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cat->id); ?></td>
                        <td><?php echo e($cat->dataNephelometro); ?></td>
                        <td><?php echo e($cat->typeNephelometro); ?></td>
                        <td><?php echo e($cat->coefNephelometro); ?></td>
                        <td><?php echo e($cat->airtempNephelometro); ?></td>
                        <td><?php echo e($cat->celltempNephelometro); ?></td>
                        <td><?php echo e($cat->rhNephelometro); ?></td>
                        <td><?php echo e($cat->pressureNephelometro); ?></td>
                        <td>
                            <a href="/nephelometro/editar/<?php echo e($cat->id); ?>" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/nephelometro/apagar/<?php echo e($cat->id); ?>" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                </tbody>
            </table>
    <?php endif; ?>    
        </div>     
    </div>
        <div class="card-footer text-muted">
        <?php echo e($cats->links()); ?>

        </div>
        <div class="card-footer">
            <a href="/nephelometro/novo" class="btn btn-sm btn-primary" role="button">Novo Nephelometro</a>
            <a href=/ImpExpNepheView class = "btn btn-sm btn-primary" role="button">Importar/Exportar</a>
        </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ["current" => "nephelometro"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/igor_kuhnen/laravel/igor_ufmt/resources/views/nephelometro.blade.php ENDPATH**/ ?>