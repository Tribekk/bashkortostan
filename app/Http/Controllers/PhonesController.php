<?php

namespace App\Http\Controllers;

use App\Filters\PhonesFilter;
use App\Models\Phones;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index(PhonesFilter $request){
        $elements = Phones::filter($request)
        ->get();

        return view('phones', compact(['elements']));
    }
}
