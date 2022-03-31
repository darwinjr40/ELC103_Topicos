


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Bienvenido a crear</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form method="post" action="{{route('persons.store')}}">
            @csrf

            <h5>Carnet de Identidad:</h5>
            <input type="text"  name="ci"  class="focus border-primary  form-control">

            <h5>Nombre Completo:</h5>
            <input type="text"  name="nombre" class="focus border-primary  form-control" >


         <div class="form-group">
            <h5>Sexo:</h5>
            <select name="sexo" id="select-sexo"  class="focus border-primary  form-control">
                <option >Elegir una Opcion</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select>
         </div>

            <h5>Telefono:</h5>
            <input type="text" name="telefono"  class="focus border-primary  form-control" >


            <h5>Email:</h5>
            <input type="text" name="email"  class="focus border-primary  form-control" >

            <h5>Domicilio:</h5>
            <input type="text" name="domicilio"  class="focus border-primary  form-control" >
         
            <br>
            <br>

            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('persons.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        
        </form>        


    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop