<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route --> /ninjas/
        // fetch all records & pass into the index view
        // $ninjas = Ninja::orderBy('created_at', 'desc')->get(); // recover all
        // $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10); // recover 10 per page
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10); // with() optimize nested query for fk relationship

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view

        // $ninja = Ninja::findOrFail($id);
        $ninja = Ninja::with('dojo')->findOrFail($id); // with() optimize nested query for fk relationship

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // route --> /ninjas/create
        // render a create view (with web form) to users
        $dojos = Dojo::all();

        return view('ninjas.create', ["dojos" => $dojos]);
    }

    public function store(Request $request) {
        // route --> /ninjas (POST)
        // handle POST request to store a new ninja record in table
        // dd('Formulário enviado', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id'
        ]);

        Ninja::create($validated);
        
        return redirect()->route('ninjas.index')->with('success', 'Ninja created successfully!');
    }
}
