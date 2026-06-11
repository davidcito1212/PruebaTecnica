<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::orderBy('created_at', 'desc')->get();

        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        return view('tareas.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'titulo' => 'required|min:3|max:100',
                'descripcion' => 'nullable|max:500',
                'prioridad' => 'required|in:baja,media,alta',
                'fecha_limite' => 'nullable|date|after_or_equal:today'
            ],
            [
                'titulo.required' => 'El título es obligatorio y debe tener entre 3 y 100 caracteres.',
                'titulo.min' => 'El título es obligatorio y debe tener entre 3 y 100 caracteres.',
                'titulo.max' => 'El título es obligatorio y debe tener entre 3 y 100 caracteres.',

                'descripcion.max' => 'La descripción no puede superar los 500 caracteres.',

                'prioridad.required' => 'La prioridad debe ser baja, media o alta.',
                'prioridad.in' => 'La prioridad debe ser baja, media o alta.',

                'fecha_limite.date' => 'La fecha límite debe ser hoy o una fecha futura.',
                'fecha_limite.after_or_equal' => 'La fecha límite debe ser hoy o una fecha futura.'
            ]
        );

        Tarea::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'prioridad' => $request->prioridad,
            'fecha_limite' => $request->fecha_limite
        ]);

        return redirect()
            ->route('tareas.index')
            ->with('success', 'Tarea creada correctamente.');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function toggle($id)
    {

    }
}
