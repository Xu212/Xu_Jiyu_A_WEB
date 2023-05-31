<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategoria as ModelsKategoria;
use Illuminate\Http\Request;

class kategoria extends Controller
{
    public function index(){
        $kategoriak = response()->json(ModelsKategoria::all());
        return $kategoriak;
    }
}
