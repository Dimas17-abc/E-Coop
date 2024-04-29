<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //untuk panggil form
    public function create() {
        return view('people.create');
    }
    //untuk panggil data
    public function store(Request $request) {
        // dd($request);
        // echo $request->name;

        $this->validate($request,[
        'name' => 'required']);
        $name = $request->name;

        return view('people.show', compact('name'));
    }
}
