<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        // fetch all records & pass into the index view
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id)
    {
        // route --> /ninjas/{id}
        // fetch a single record and pass into show view
        $ninja = Ninja::findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create()
    {
        // route --> /ninjas/create
        // render a create view (with web form) to users
        return view('ninjas.create');
    }

    public function store()
    {
        // --> /ninjas/ (POST)
        // handle POST request to store a new ninja record in table
    }

    public function update()
    {
        //
    }

    // public function update()
    // {
    //     //
    // }
}
