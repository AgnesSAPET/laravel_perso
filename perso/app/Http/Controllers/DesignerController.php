<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class DesignerController extends Controller
{
    public static function add(Request $request)
    {
        $designer = new Designer;
        $designer->name = $request->name;
        $designer->year_born = $request->year_born;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect ('/designers');
    }

    public static function update(Request $request)
    {
        $designer = Designer::find($request->id);;
        $designer = new Designer;
        $designer->name = $request->name;
        $designer->year_born = $request->year_born;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/designers');
    }
}
