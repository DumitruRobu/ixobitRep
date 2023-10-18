<?php

namespace App\Http\Controllers\ProduseControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use App\Models\ModelProdus;
use Illuminate\Http\Request;

class ViewProdusController extends Controller
{
    public function __invoke($id)
    {
        $produs = ModelProdus::findOrFail($id);
        return view("viewProdus", compact("produs"));
    }
}
