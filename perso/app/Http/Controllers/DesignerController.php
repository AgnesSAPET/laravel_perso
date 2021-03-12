<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class DesignerController extends Controller
{
    public static function addDesigner(Request $request)
    {
        $designer = new Designer;
        $designer->name = $request->name;
        $designer->year_born = $request->year_born;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect ('/designers');
    }

    public static function updateDesigner(Request $request)
    {
        $designer = Designer::find($request->id);
        $designer->name = $request->name;
        $designer->year_born = $request->year_born;
        $designer->nationality = $request->nationality;
        $designer->save();
        return redirect('/designers');
    }

    public static function delete(Request $request)
    {
       $designers = Designer::find($request->id);
       $designers->delete();
       //Designer::destroy($request->id);
       return redirect('/designers');
    }
}
