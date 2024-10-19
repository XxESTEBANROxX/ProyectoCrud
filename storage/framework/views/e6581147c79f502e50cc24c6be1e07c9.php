

<?php $__env->startSection("titulopagina", "Crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Agregar un Nuevo Cliente</h5>
  <div class="card-body">
      <p class="card-text">
        <form action ="<?php echo e(route('personas.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="">Nombres</label>
            <input type="text" name="autor" class="form-control" Required>
            <label for="">Apellidos</label>
            <input type="text" name="libro" class="form-control" Required>
            <label for=""></label>
            <br>
            <br>
            <a href="<?php echo e(route("personas.index")); ?>" class= "btn btn-info ">
              <span <i class="fa-solid fa-people-pulling"></i></span> Regresar
            </a>
            <button class="btn btn-primary">
              <span <i class="fa-solid fa-user-plus"></i></span> Agregar
            </button>
            
        </form>
      </p>
  </div>
</div>
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/agregar.blade.php ENDPATH**/ ?>