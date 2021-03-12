<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $characters = Character::all();
        return view('list', ['characters' => $characters]);
    }

    public function character($id)
    {
        $character = Character::getOne($id);
        return view('character', ['character' => $character]);
    }

    public function designers()
    {
        $designers = Designer::all();
        return view('designers', ['designers' => $designers]);
    }

    public function designer($id)
    {
        $designer = Designer::getOne($id);
        $character = Character::all();
        return view('designer', ['designer' => $designer]);
    }
    
    public function add()
    {
        return view('add');
    }

    public function addPerso()
    {
        $characters = Character::all();
        $designers = Designer::all()->sortBy('name');
        return view('addPerso', ['characters' => $characters, 'designers' => $designers]);
    }

    public function addDesigner()
    {
        $designer = Designer::all();
        return view('addDesigner', ['designer' => $designer]);
    }


    public function updateCharacter($id)
    {
        $character = Character::find($id);
        $designer = Designer::all()->sortBy('name');
        return view('updateCharacter', ['character' => $character, 'designer' => $designer]);
    }

    public function updateDesigner($id)
    {
        $designer = Designer::find($id);
        return view('updateDesigner', ['designer' => $designer]);
    }
}
