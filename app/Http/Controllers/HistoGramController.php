<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoGramController extends Controller
{    
    /**
     * histogram
     *
     * @param Request $request
     * @return void
     * @author Santiago Echeverri
     */
    public function histogram(Request $request) {
        $histograms = $request->histogram ? explode(',', $request->histogram) : [];
        
        $arrs = [
            [
                'position' => 1,
                'quantity' => 0,
            ],
            [
                'position' => 2,
                'quantity' => 0,
            ],
            [
                'position' => 3,
                'quantity' => 0,
            ],
            [
                'position' => 4,
                'quantity' => 0,
            ],
            [
                'position' => 5,
                'quantity' => 0,
            ]
        ];

        foreach ($histograms as $histogram) {
            foreach ($arrs as $key => $arr) {
                if ($arr['position'] == (int) $histogram) {
                    $arrs[$key]['quantity']++;
                }
            }
        }

        return view('excercises.histogram', ['histograms' => $arrs]);
    }
}
