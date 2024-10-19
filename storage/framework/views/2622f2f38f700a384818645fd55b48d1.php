

<?php $__env->startSection("titulopagina", "Eliminar un registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Eliminar un registro</h5>
  <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro?
                <table class="table table-sm table-hover">
                    <thead>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a href="<?php echo e(route("personas.index")); ?>" class= "btn btn-info ">
                        <span <i class="fa-solid fa-people-pulling"></i></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fa-solid fa-xmark"></span> Eliminar
                    </button>





                </form>
            </div>
        </p>
  </div>
</div>
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/eliminar.blade.php ENDPATH**/ ?>