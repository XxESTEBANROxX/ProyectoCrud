<?php $__env->startSection('titulopagina', 'Crud con Laravel 8'); ?>

<?php $__env->startSection('contenido'); ?>
<br><br>
    <div class="card">
        <h5 class= "card-header"> BIBLIOTECA VIRTUAL</h5>
    <div class="card-body">
        <h5 class="card-title">BIENVENIDO</h5>
        <p>
            <a href="<?php echo e(route("personas.create")); ?>" class="btn btn-primary">
                <span <i class="fa-solid fa-book"></i></span> Agregar Nuevo Libro
            </a>
            <a href="<?php echo e(route("personas.create_persona")); ?>" class="btn btn-secondary">
                <span <i class="fa-solid fa-user-plus"></i></span> Agregar Nuevo Cliente
            </a>
        </p>
        <hr>
        <h5 class="card-title">listado de libros en el sistema</h5>        
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thhead>
                        <th>Nombre</th>
                        <th>Libro</th>
                        <th>Fecha Publicacion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr> 
                            <td><?php echo e($item->nombres); ?></td>
                            <td><?php echo e($item->apellidos); ?></td>
                       
                            <td>
                                <form action="">
                                    <button class="btn btn-warning btn-sm">
                                    <span class="fa-solid fa-pen-to-square"></span>
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <button class="btn btn-danger btn-sm">
                                    <span class="fa-solid fa-xmark"></span>
                                </form>
                            </td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                <table>
            </div>
        </p>
    </div>
    </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\proyectolaravel\primerCrud\resources\views/inicio.blade.php ENDPATH**/ ?>