@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')

   <style>
    .acciones {
      display: flex;
      gap: 10px; /* Espaciado entre los botones */
    }
    .table {
        
        border-collapse: separate;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 12px;
        overflow: hidden;
        max-width: 900%;
        margin: 20px auto
        
    }


   </style>
  

   
    <a class="btn btn-primary btn-sm" href="{{ route('producto.create') }}">Registrar producto</a>
    <div >
        <div class="text-white">
            <h1><center> Productos</center></h1>
        </div>
        <br>
   
    </div>
    <table class="table table-dark table-hover table-sm">
        <thead class="table table-dark table-hover">
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th class="text-center">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td class="text-center">{{ /* $p->id */ $loop->iteration }}</td>
                    <td class="text-center">{{ $p->nombre }}</td>
                    <td class="text-center">{{ $p->marca }}</td>
                    <td >{{ $p->descripcion }}</td>
                    <td class="text-center">{{ $p->precio }}</td>
                    <td class="text-">
                        <div class="acciones">
                            <a  href="{{ route('producto.edit', ['id'=>$p->id]) }}" class="text-warning me-2"><i class="bi bi-pencil"></i></a>
                            <form
                                action="{{ route('producto.destroy', ['id'=>$p->id]) }}"
                                method="POST"
                                onsubmit="return confirm('esta seguro de eliminar este producto ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-danger" ><i class="bi bi-trash"></i></button>
                        </form>
                   

                        </div>


                       
                           

                        
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    
    
@endsection


    </div>