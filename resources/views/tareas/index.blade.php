@extends('layouts.app')

@section('content')

<div class="mb-3">
    <a href="{{ route('tareas.create') }}" class="btn btn-primary">
        Nueva tarea
    </a>
</div>

@if($tareas->isEmpty())

    <div class="alert alert-info">
        No hay tareas registradas.
    </div>

@else

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Título</th>
            <th>Prioridad</th>
            <th>Estado</th>
            <th>Fecha límite</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>

        @foreach($tareas as $tarea)

            <tr>
                <td>{{ $tarea->titulo }}</td>

                <td>
                    {{ $tarea->prioridad }}
                </td>

                <td>
                    @if($tarea->completada)
                        ✓
                    @endif
                </td>

                <td>
                    {{ $tarea->fecha_limite }}
                </td>

                <td>
                    Acciones
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endif

@endsection
