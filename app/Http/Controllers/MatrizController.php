<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MatrizController extends Controller
{    
    /**
     * matriz
     *
     * @param Request $request
     * @return View
     * @author Santiago Echeverri
     */
    public function matriz(Request $request) : View {
        return view('excercises.matriz', ['matriz' => []]);
    }
}
