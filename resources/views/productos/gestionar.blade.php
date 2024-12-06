@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')
    <h1><center>Gestionar los productos</center></h1>
    <a class="btn btn-primary btn-sm" href="{{ route('producto.create') }}">Registrar producto</a>
    <table class="table">
        <thead>
            <th>N°</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td class="text-center">{{ /* $p->id */ $loop->iteration }}</td>
                    <td class="text-center">{{ $p->nombre }}</td>
                    <td class="text-center">{{ $p->marca }}</td>
                    <td class="text-center">{{ $p->descripcion }}</td>
                    <td class="text-center">{{ $p->precio }}</td>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="{{ route('producto.edit', ['id'=>$p->id]) }}">Editar</a>

                        |

                        <form
                            action="{{ route('producto.destroy', ['id'=>$p->id]) }}"
                            method="POST"
                            onsubmit="return confirm('Seguro?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
