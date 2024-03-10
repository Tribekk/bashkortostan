<?php

namespace App\Http\Controllers;

use App\Filters\StructureFilter;
use App\Models\Structure;

class StructureController extends Controller
{
    public function index(StructureFilter $request)
    {
        $elements = Structure::filter($request)
            ->get();

        return view('aboutstructure', compact(['elements']));
    }
}
