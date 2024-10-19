<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        // La Pagina de inicio del CRUD
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        // El formulario donde nosotros agregamos datos
        return view ('agregar_libro');
        
    }

    public function create_persona()
    {
        // El formulario donde nosotros agregamos datos
        return view ('agregar');
        
    }

    public function store(Request $request)
    {
        // Sirve para guardas datos en la DB
        $_personas = new Personas();
        $_personas->nombre = $request->post(nombre);
        $_personas->libro = $request->post(libro);
        $_personas->fecha_publicacion = $request->post(fecha_publicacion);
        $_personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con Exito!!");
    }

    public function show(Personas $personas)
    {
        // Sirve para obtener un registro de nuestra tabla
        return view('eliminar');
    }

    public function edit(Personas $personas)
    {
        // Este metodo nos sirve para traer los datos que se van a editar  y montarlos en una lista
        return view('actualizar');
        
    }

    public function update(Request $request, Personas $personas)
    {
        // Este metodo actualiza los datos en la DB
        
    }

    public function destroy(Personas $personas)
    {
        // Elimina un registro
    }
}
