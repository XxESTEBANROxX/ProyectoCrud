

<?php $__env->startSection("titulopagina", "Actualizar un registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Actualizar un registro</h5>
  <div class="card-body">
    <p class="card-text">
      <form action ="#">
          <label for="">nombres</label>
          <input type="text" name="nombre" class="form-control" Required>
          <label for="">apellidos</label>
          <input type="text" name="apellido" class="form-control" Required>
          <br>
          <a href="<?php echo e(route("personas.index")); ?>" class= "btn btn-info ">
            <span <i class="fa-solid fa-people-pulling"></i></span> Regresar
          </a>
            <button class="btn btn-warning">
                <span class="fa-solid fa-pen-to-square"></span> Actualizar
            </button>
          
      </form>
    </p>
  </div>
</div>
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/actualizar.blade.php ENDPATH**/ ?>