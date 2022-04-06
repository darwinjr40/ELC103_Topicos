<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//protectes $table = 'people'   //para refeerenciarlo a una tabla, solo en caso de que no siga las convenciones 
class Person extends Model
{
    use HasFactory;
    // protected $fillable = ['ci','nombre','sexo','telefono','email', 'domicilio'];//los atributos que guardaremos
    // protected $guarded = ['ci','nombre','sexo','telefono','email', 'domicilio'];//los atributos que no guardaremos si es que existiera
    protected $guarded = []; //en este caso, vacio por que quiero que gurde todos

    
    
    


}
