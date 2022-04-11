


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Bienvenido a crear</h1>
@stop

@section('content')



<div class="card">
    <div class="card-header">
        <form id="personal" method="post" action="{{route('persons.store')}}">
            @csrf
            <!-- Grupo: ci -->
            <h5>Carnet de Identidad:</h5>
            <div class="formulario__grupo-input" id="grupo__ci">
                    <input type="text"  name="ci" class="focus border-primary  form-control"  value="{{old('ci')}}">
                    <i  class="formulario__validacion-estado fas"></i>
                    @error('ci') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="ci" class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
            <!-- Grupo: Nombre -->
            <h5>Nombre Completo:</h5>
            <div class="formulario__grupo-input" id="grupo__nombre">
                <input type="text"  name="nombre" class="focus border-primary  form-control" value="{{old('nombre')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('nombre') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="nombre" class="formulario__input-error">*El nombre tiene que ser de 1 a 40 letras y solo puede contener letras, espacios y puede llevar acentos.</p>
            <!-- Grupo: sexo -->
            <div class="form-group">
            <h5>Sexo:</h5>
            <select name="sexo" id="select-sexo"  class="focus border-primary  form-control" value="{{old('sexo')}}">
                <option value="">Elegir una Opcion</option>
                <option value="f" {{ old('sexo') == 'f' ? 'selected' : '' }}>Femenino</option>
                <option value="m" {{ old('sexo') == 'm' ? 'selected' : '' }}>Masculino</option>
            </select>
            @error('sexo')  <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <!-- Grupo: Email -->
            <h5>Email:</h5>
            <div class="formulario__grupo-input" id="grupo__email">
                <input type="email" name="email"  class="focus border-primary  form-control" value="{{old('email')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('email') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="email" class="formulario__input-error">*El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
            <!-- Grupo: Telefono -->
            <h5>Telefono:</h5>
            <div class="formulario__grupo-input" id="grupo__telefono">
                <input type="number" name="telefono"  class="focus border-primary  form-control" value="{{old('telefono')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('telefono')  <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="telefono" class="formulario__input-error">*El telefono solo puede contener entre 7 y 14 dígitos.</p>
            <!-- Grupo: Domicilio -->
            <h5>Domicilio:</h5>
            <div class="formulario__grupo-input" id="grupo__domicilio">
                <input type="text" name="domicilio"  class="focus border-primary  form-control" value="{{old('domicilio')}}">
                <i  class="formulario__validacion-estado fas"></i>
                @error('domicilio') <small style="color: red">*{{$message}}</small> @enderror
            </div>
            <p id="domicilio" class="formulario__input-error">*El domicilio puede contener entre 5 y 50 caracteres.</p>
            
            
            



            

            
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>

            

            <br>
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>
            <a href="{{route('persons.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>

           
        </form>        


    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ asset('js/prueba.js') }}"></script>
@stop