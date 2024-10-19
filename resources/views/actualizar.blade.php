@extends ('layout/plantilla')

@section ("titulopagina", "Actualizar un registro")

@section ('contenido')
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
          <a href="{{route("personas.index")}}" class= "btn btn-info ">
            <span <i class="fa-solid fa-people-pulling"></i></span> Regresar
          </a>
            <button class="btn btn-warning">
                <span class="fa-solid fa-pen-to-square"></span> Actualizar
            </button>
          
      </form>
    </p>
  </div>
</div>