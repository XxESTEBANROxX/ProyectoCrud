@extends ('layout/plantilla')

@section ("titulopagina", "Eliminar un registro")

@section ('contenido')
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
                    <a href="{{route("personas.index")}}" class= "btn btn-info ">
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