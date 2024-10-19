<?php $__env->startSection('titulopagina', 'Crud con Laravel 8'); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="row">
        <h1>Hola usando Layouts</h1>
        <i class="fa-sharp-duotone fa-solid fa-key"></i>
        <a href="<?php echo e(route('personas.edit')); ?>">Editar</a>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/welcome.blade.php ENDPATH**/ ?>