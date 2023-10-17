<?php

namespace App\Http\Controllers\ParamsControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use Illuminate\Http\Request;

class ViewAllParamsController extends Controller
{
    public function __invoke()
    {
        $allParams = ModelParams::all();
        return view("viewAllParams", compact("allParams"));
    }
}
