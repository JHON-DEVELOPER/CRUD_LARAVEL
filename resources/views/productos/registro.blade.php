@extends('layouts.app')
@section('titulo', 'Registrar producto')
@section('contenido')
     

<div class="justify-content-center">
    <a class="btn btn-primary btn-sm" href="{{ route('producto.index') }}" >Gestionar productos</a>
</div>
    <div class="text-white"> 
        <h1><center>Registro de producto</center></h1>
        <br>
      
       
            
        <form action="{{ route('producto.store') }}" method="POST" style="width:40%;margin:0 auto;">
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
    
     
 
    

    
    </div>
@endsection
