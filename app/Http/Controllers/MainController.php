<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    
    // HOME
    public function home(){

        $saints = Saint::orderBy('created_at', 'DESC') -> get();

        $data = [

            'saints' => $saints
        ];

        return view('pages.home', $data);
    }

    // SHOW
    public function show($id){

        $saint = Saint::find($id);

        $data = [
            
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }

    // DESTROY
    public function destroy($id){

        $saint = Saint::find($id);

        $saint -> delete();

        return redirect() -> route('home');
    }

    // CREATE
    public function create(){

        return view('pages.create');
    }

    // STORE
    public function store(Request $request){

        $data = $request -> all();

        $saint = new Saint();
        $saint -> name = $data['name'];
        $saint -> birth_place = $data['birth_place'];
        $saint -> sainthood_date = $data['sainthood_date'];
        $saint -> miracles = $data['miracles'];

        $saint -> save();

        return redirect() -> route('home');
    }

}
