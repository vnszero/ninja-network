<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route --> /ninjas/
        // fetch all records & pass into the index view
        // $ninjas = Ninja::orderBy('created_at', 'desc')->get(); // recover all
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10); // recover 10 per page

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view

        $ninja = Ninja::findOrFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // route --> /ninjas/create
        // render a create view (with web form) to users

        return view('ninjas.create');
    }
}
