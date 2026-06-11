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

            <tr @if($tarea->completada) class="text-muted" @endif>
                <td>
                    @if($tarea->completada)
                        <s>{{ $tarea->titulo }}</s>
                    @else
                        {{ $tarea->titulo }}
                    @endif
                </td>

                <td>

                    @if($tarea->prioridad == 'alta')
                        <span class="badge bg-danger">
                            Alta
                        </span>

                    @elseif($tarea->prioridad == 'media')
                        <span class="badge bg-warning text-dark">
                            Media
                        </span>

                    @else
                        <span class="badge bg-success">
                            Baja
                        </span>
                    @endif

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

                    <a
                        href="{{ route('tareas.edit', $tarea->id) }}"
                        class="btn btn-sm btn-warning"
                    >
                        Editar
                    </a>

                    <form
                        action="{{ route('tareas.destroy', $tarea->id) }}"
                        method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('¿Eliminar esta tarea?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-sm btn-danger"
                        >
                            Eliminar
                        </button>
                    </form>

                    <form
                        action="{{ route('tareas.toggle', $tarea->id) }}"
                        method="POST"
                        style="display:inline;"
                    >
                        @csrf
                        @method('PATCH')

                        <button
                            type="submit"
                            class="btn btn-sm btn-success"
                        >
                            Completar
                        </button>
                    </form>

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endif

@endsection
