<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public static function create($title, $characterID){
        
        Title::create([
            'character_id' => $characterID,
            'title' => $title,
        ]);
    }
}
