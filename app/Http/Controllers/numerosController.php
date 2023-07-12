<?php

namespace App\Http\Controllers;
use App\Models\Concept;

class numerosController extends Controller
{
    public function index()
    {
        return $this->mostrarConceptos();
    }

    public function mostrarConceptos()
    {
        $concepts = Concept::where('category', 'numeros')->get();
        return view('numeros', ['concepts' => $concepts]);
    }
}

