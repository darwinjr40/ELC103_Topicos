<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>topicos</title>
</head>
<body>
    <h1>Bienvenido a topicos</h1>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btb-sm" href="{{route('persons.create')}}"> Registrar persona</a>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-body">
          <table class="table table-striped" id="personal" >
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
                  <th>{{$persona->id}}</th>
                  <th>{{$persona->ci}}</th>
                  <th>{{$persona->nombre}}</th>
                  <th>{{$persona->sexo}}</th>
                  <th>{{$persona->telefono}}</th>
                  <th>{{$persona->email}}</th>
                  <th>{{$persona->domicilio}}</th>

                  <th >
                    <form  action="{{route('persons.destroy',$persona)}}" method="post">
                      @csrf
                      @method('delete')
                        <a  class="btn btn-primary btn-sm" href="{{route('persons.show',$persona)}}">Ver</a>  
                        <a class="btn btn-info btn-sm" href="{{route('persons.edit',$persona)}}">Editar</a>                 
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                        value="Borrar">Eliminar</button>
    
                    </form>
                  </th>    
                </tr>
              @endforeach
            </tbody> 
    
          </table>
        </div>
      </div>

      
</body>
</html>
