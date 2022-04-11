@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 id="titulo">Bienvenido a topicos</h1>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary btb-sm" href="{{route('persons.create')}}"> Registrar persona</a>
    </div>
</div>

<br>
<div class="card">
    <div class="card-body">
      <table class="table table-striped" id="personal" border="5" >
        <thead>
          <tr>
            <th scope="col" width="5%">Id</th>
            <th scope="col" width= "10%">Ci </th>
            <th scope="col" width= "15%">Nombre </th>
            <th scope="col" width= "5%">Sexo </th>
            <th scope="col" width= "15%">Telefono</th>
            <th scope="col" width= "15%">Email</th>
            <th scope="col" width= "15%">Domicilio</th>
            <th scope="col" width="10%">Acciones</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($personas as $persona)
            <tr>
              <td>{{$persona->id}}</td>
              <td>{{$persona->ci}}</td>
              <td>{{$persona->nombre}}</td>
              <td>{{$persona->sexo}}</td>
              <td>{{$persona->telefono}}</td>
              <td>{{$persona->email}}</td>
              <td>{{$persona->domicilio}}</td>

              <td >
                <form  action="{{route('persons.destroy',$persona)}}" method="post">
                  @csrf
                  @method('delete')
                    {{-- <a  class="btn btn-primary btn-sm" href="{{route('persons.show',$persona)}}">Ver</a>   --}}
                    <a class="btn btn-info btn-sm" href="{{route('persons.edit',$persona)}}">Editar</a>                 
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                    value="Borrar">Eliminar</button>

                </form>
              </td>    
            </tr>
          @endforeach
        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css"> --}}

{{-- responsive --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
{{-- responsive --}}
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
     $('#personal').DataTable({
       responsive: true,
       autoWidth: false
     });
    } );
</script>


@stop