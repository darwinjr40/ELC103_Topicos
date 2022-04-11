<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        $personas = Person::all();
        return view('persons.index', compact('personas'));
    }


    public function create()
    {
        return view('persons.create');
    }

    public function store(Request $request)
    {
        // $data =
        $request->validate([
            'ci' => 'required',
            'nombre' => 'required',
            'sexo' => 'required',
            'telefono' => 'required',
            'email' => ' required | unique:people',
            'domicilio' => ' required'
        ]);

        // $email = Person::where('email', $data['email'])->first();
        // if ($email) {
        //     return response(['message' => 'Error correo ya registrado'],
        //         401);
        // }

        $personas = Person::create($request->all());
        return redirect()->route('persons.index');        
    }


    public function show(Person $person)
    {
        return view('persons.show');
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }


    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('persons.index');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}
