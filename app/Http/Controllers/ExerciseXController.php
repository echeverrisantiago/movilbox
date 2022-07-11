<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseXController extends Controller
{    
        
    /**
     * buildX
     *
     * @param  Request $request
     * @return string
     * @author Santiago Echeverri
     */
    public function buildX(Request $request) : string
    {   
        $x = $request->x ? $request->x : 25;
        $result = '';
        $firstX = 0;
        $lastX = $x - 1;

        if ($x) {
            for ($i = 0; $i < $x; $i++) {
                for ($z = 0; $z < $x; $z++) {
                    if ($z == $firstX || $z == $lastX) {
                        $result .= 'x';
                    } else {
                        $result .= '_';
                    }

                    if ($z == ($x - 1)) {
                        $result .= '<br>';
                    }

                }                
                $firstX++;
                $lastX--;                
            }
        }
        
        return view('excercises.equis', ['result' => $result]);
    }
}
