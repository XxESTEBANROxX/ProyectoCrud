@extends ('layout/plantilla')

@section ("titulopagina", "Crear un nuevo registro")

@section ('contenido')
<div class="card">
  <h5 class="card-header">Agregar un Nuevo Cliente</h5>
  <div class="card-body">
      <p class="card-text">
        <form action ="{{route('personas.store')}}" method="POST">
            @csrf
            <label for="">Nombres</label>
            <input type="text" name="autor" class="form-control" Required>
            <label for="">Apellidos</label>
            <input type="text" name="libro" class="form-control" Required>
            <label for=""></label>
            <br>
            <br>
            <a href="{{route("personas.index")}}" class= "btn btn-info ">
              <span <i class="fa-solid fa-people-pulling"></i></span> Regresar
            </a>
            <button class="btn btn-primary">
              <span <i class="fa-solid fa-user-plus"></i></span> Agregar
            </button>
            
        </form>
      </p>
  </div>
</div>