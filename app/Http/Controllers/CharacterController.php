<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public static function create($array){

        $data = [
            'name' => $array['name'],
            'gender' => $array['gender'],
            'culture' => $array['culture'],
            'born' => $array['born'],
            'died' => $array['died'],
        ];

        $character = Character::create($data);
        
        return $character->id;
    }

    public function update(Character $character){

        $data = request()->validate([
            'name' => 'required',
            'gender' => '',
            'culture' => '', 
            'born' => '',
            'died' => '',
        ]);

        $character->update($data);
        
        return redirect('/characters/'. $character->id);
    }


    public function index(){

        $characters = Character::paginate(10);
        return view('characters.index', compact('characters'));
    }

    public function edit(Character $character){
        
        return view('characters.edit', compact('character'));
    }

    public function show(Character $character){
        $titles = $character->titles()->get()->pluck('title');
        return view('characters.show', compact('character', 'titles'));
    }

}
