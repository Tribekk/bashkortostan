<?php

namespace App\Http\Controllers;

use App\Models\Deputies;
use Illuminate\Http\Request;

class DeputiesController extends Controller
{
    public function index(Request $request)
    {
        $elements = Deputies::all();
        return view('deputies', compact('elements'));
    }
}
