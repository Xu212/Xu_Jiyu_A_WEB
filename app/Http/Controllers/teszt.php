<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\teszt as ModelsTeszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teszt extends Controller
{
    public function index(){
        $tesztek = DB::table('teszt')
        ->select('*')
        ->join('kategoria', 'kategoria.id','=','teszt.kategoriaId')
        ->get();
        return $tesztek;
    }
    public function show($id){
        $teszt = response()->json(ModelsTeszt::find($id));
    }
}
