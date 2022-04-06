<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Person();
        $persona->ci = '8870123';
        $persona->nombre ='Darwin Mamani Paco';
        $persona->sexo ='m';
        $persona->telefono ='72182712';
        $persona->email ='darwin@gmail.com';
        $persona->domicilio = 'AV. Santos Dumont entre 3er y 4to anillo ';
        $persona->save();


        Person::create([
            'ci' => '12345678',
            'nombre'=> 'Alberto Coimbra Zarate',
            'sexo' => 'm',
            'telefono'=> '72314521',
            'email'=> 'admin0@gmail.com',
            'domicilio'=> 'Av. tres pasos al frente',  
        ]);
    }
}
