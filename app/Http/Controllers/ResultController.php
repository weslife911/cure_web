<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Result;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function showResult() {   
        
        $results = Result::all();

        return view("verified.results", compact("results"));
    }

    public function generatePDF() {
        $results = Result::all();

        $data = [
            "results" => $results,
            "title" => "THE CURE FOUNDATION"
        ];

        $pdf = Pdf::loadView("results.results", $data);
        return $pdf->download("CA_" . str_replace(" ", "_", Auth::user()->name) . ".pdf");
    }

    
}
