<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Status de Login</div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Você está Logado!!
                </div>
                <div class="card-header">Sistema de Dados</div>
                <div class="card-body">
                    <a href="/nephelometro" class="btn btn-sm btn-primary" role="button">Nephelometro</a>
                    <a href="/maap" class="btn btn-sm btn-primary" role="button">Maap</a>
                    <a href="/aethalometro" class="btn btn-sm btn-primary" role="button">Aethalometro</a>
                    <a href="/perfilsolo" class="btn btn-sm btn-primary" role="button">Perfil de Solo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/igor_kuhnen/laravel/igor_ufmt/resources/views/home.blade.php ENDPATH**/ ?>