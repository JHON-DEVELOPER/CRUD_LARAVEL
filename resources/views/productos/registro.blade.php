@extends('layouts.app')
@section('titulo', 'Registrar producto')
@section('contenido')


    <h1><center>Registro de producto</center></h1>
    <br>
    

    <a class="btn btn-primary btn-sm" href="{{ route('producto.index') }}">Gestionar productos</a>
    <br>
    <br>
    
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto   </label>
            <input type="text" id="nombre" name="nombre" class="form-control"aria-describedby="passwordHelpBlock" >

        </div>
        <div class="mb-3">
            <label for="marca"class="form-label">Marca del producto</label>
            <input type="text" id="marca" name="marca" class="form-control"aria-describedby="passwordHelpBlock">
        </div>
        
        <div class="mb-3">
            <label for="precio" class="form-label ">Precio del producto</label>
            <input type="text" id="precio" name="precio" class="form-control"aria-describedby="passwordHelpBlock"  >
        </div>
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del producto</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control"aria-describedby="passwordHelpBlock">
        </div>
        

        <button  type="submit"  class="btn btn-success">Registrar producto</button>
    </form>
@endsection
