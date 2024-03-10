<?php

namespace App\Http\Controllers;

use App\Filters\CouncilStructureFilter;
use App\Models\CouncilStructure;

class CouncilStructureController extends Controller
{
    public function index(CouncilStructureFilter $request)
    {
        $elements = CouncilStructure::filter($request)
            ->get();

        return view('councilstructure', compact(['elements']));
    }
}
