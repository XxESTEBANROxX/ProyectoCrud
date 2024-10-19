

<?php $__env->startSection("titulopagina", "Crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Agregar un Nuevo Libro</h5>
  <div class="card-body">
      <p class="card-text">
        <form action ="<?php echo e(route('personas.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="">Nombre Autor</label>
            <input type="text" name="autor" class="form-control" Required>
            <label for="">Nombre del libro</label>
            <input type="text" name="libro" class="form-control" Required>
            <label for="">Fecha de Publicacion</label>
            <input type="date" name="fecha_publicacion" class="form-control" Required>
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
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/agregar_libro.blade.php ENDPATH**/ ?>