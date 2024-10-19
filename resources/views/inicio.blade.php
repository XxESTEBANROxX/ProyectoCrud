@extends('layout/plantilla')

@section('titulopagina', 'Crud con Laravel 8')

@section('contenido')
<br><br>
    <div class="card">
        <h5 class= "card-header"> BIBLIOTECA VIRTUAL</h5>
    <div class="card-body">
        <h5 class="card-title">BIENVENIDO</h5>
        <p>
            <a href="{{route("personas.create")}}" class="btn btn-primary">
                <span <i class="fa-solid fa-book"></i></span> Agregar Nuevo Libro
            </a>
            <a href="{{route("personas.create_persona")}}" class="btn btn-secondary">
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
                @foreach ($datos as $item)
                        <tr> 
                            <td>{{$item->nombres}}</td>
                            <td>{{$item->apellidos}}</td>
                       
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
                @endforeach
                    </tbody>
                <table>
            </div>
        </p>
    </div>
    </div>
   
@endsection