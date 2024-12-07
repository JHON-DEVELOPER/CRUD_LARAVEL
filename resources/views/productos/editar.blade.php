@extends('layouts.app')
@section('titulo', 'Editar producto')
@section('contenido')

    <div >
       
     
    </div>
    

    <a class="btn btn-primary btn-sm" href="{{ route('producto.index') }}">Gestionar productos</a>
     
    <br>
    <br>
    <div class="text-white" >

        <h1><center>Editar producto</center></h1>
        <br>
        <form action="{{ route('producto.update', ['id' => $producto->id ]) }}"
            method="POST" style="width:40%;margin:0 auto;">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" class="form-control"aria-describedby="passwordHelpBlock">
    
            </div>
            
            <div class="mb-3">
                <label for="marca" class="form-label" >Marca del producto</label>
                <input type="text" id="marca" name="marca" value="{{ $producto->marca }}" class="form-control"aria-describedby="passwordHelpBlock">
    
            </div>
            
            <div class="mb-3">
                <label for="precio" class="form-label" >Precio del producto</label>
                <input type="text" id="precio" name="precio" value="{{ $producto->precio }}" class="form-control"aria-describedby="passwordHelpBlock">
    
    
            </div>
    
            <div class="mbv-3">
                <label for="descripcion" class="form-label" >Descripción del producto</label>
                <input type="text" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" class="form-control"aria-describedby="passwordHelpBlock">
    
    
            </div>
            <br>
            <br>
            
            <button type="submit" class="btn btn-success btn-sm">Editar producto</button>
        </form>

    </div>
    
@endsection
