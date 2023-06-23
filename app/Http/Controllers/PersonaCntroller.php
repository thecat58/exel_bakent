<?php

namespace App\Http\Controllers;
use App\Models\Person;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return response() -> json($persons);
       
    }
}
