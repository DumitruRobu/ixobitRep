<?php

namespace App\Http\Controllers\ProduseControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use App\Models\ModelProdus;
use Illuminate\Http\Request;

class ViewAllProdusController extends Controller
{
    public function __invoke()
    {
        $allProdus = ModelProdus::all();
        return view("viewAllProdus", compact("allProdus"));
    }
}
