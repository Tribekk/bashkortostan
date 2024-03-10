<?php

namespace App\Http\Controllers;

use App\Filters\SettlementsFilter;
use Illuminate\Http\Request;
use App\Models\Settlements;

class SettlementsController extends Controller
{
    public function index(SettlementsFilter $request){
        $elements = Settlements::filter($request)
        ->get();

        return view('settlements', compact(['elements']));
    }
}
