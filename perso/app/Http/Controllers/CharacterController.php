<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class CharacterController extends Controller
{
    public static function addPerso(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->cartoon = $request->cartoon;
        $character->creation_year = $request->creation_year;
        $character->designer_id = $request->designer_id;
        $character->save();
        return redirect ('/list');
    }

    public static function updateCharacter(Request $request)
    {
        $character = Character::find($request->id);
        $character->name = $request->name;
        $character->cartoon = $request->cartoon;
        $character->creation_year = $request->creation_year;
        $character->designer_id = $request->designer_id;
        $character->save();
        return redirect('/list');
    }

    public static function delete(Request $request)
    {
       $character = Character::find($request->id);
       $character->delete();
       //Character::destroy($request->id);
       return redirect('/list');
    }
}
