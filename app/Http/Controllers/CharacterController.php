<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    
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

}
