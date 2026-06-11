@extends('layouts.app')

@section('content')

<h2>Nueva tarea</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tareas.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Título</label>

        <input
            type="text"
            name="titulo"
            class="form-control"
            value="{{ old('titulo') }}"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>

        <textarea
            name="descripcion"
            class="form-control"
            rows="3"
        >{{ old('descripcion') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Prioridad</label>

        <select name="prioridad" class="form-select">
            <option value="baja">Baja</option>
            <option value="media" selected>Media</option>
            <option value="alta">Alta</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha límite</label>

        <input
            type="date"
            name="fecha_limite"
            class="form-control"
        >
    </div>

    <button type="submit" class="btn btn-primary">
        Guardar
    </button>

    <a href="{{ route('tareas.index') }}" class="btn btn-secondary">
        Volver
    </a>

</form>

@endsection
