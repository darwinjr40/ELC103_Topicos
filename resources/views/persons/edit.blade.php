<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>topicos</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('persons.update',$person)}}" novalidate >
                @csrf
                @method('PATCH')
                
                <h5>Carnet de Identidad:</h5>
                <input type="text"  name="ci" value="{{$person->ci}}" class="focus border-primary  form-control" >
               
    
                <h5>Nombre Completo:</h5>
                <input type="text"  name="nombre" value="{{$person->nombre}}" class="focus border-primary  form-control" >
    
    
             <div class="form-group">
                <h5>Sexo:</h5>
                <select name="sexo" id="select-sexo"  class="focus border-primary  form-control">
                    <option value="{{$person->sexo}}">{{$person->sexo}}</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
    
             </div>
    
                <h5>Telefono:</h5>
                <input type="text" name="telefono" value="{{$person->telefono}}"  class="focus border-primary  form-control" >
    
    
                <h5>Email:</h5>
                <input type="text" name="email" value="{{$person->email}}" class="focus border-primary  form-control" >
    
                
                <h5>Domicilio:</h5>
                <input type="text" name="domicilio" value="{{$person->domicilio}}" class="focus border-primary  form-control" >
    
                <br>
                <br>
    
                <button  class="btn btn-danger btn-sm" type="submit">Guardar</button>
                <a href="{{route('persons.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
            </form> 
    
        </div>
    </div>
</body>
</html>