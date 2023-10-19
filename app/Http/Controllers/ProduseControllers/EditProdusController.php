<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;
use App\Models\ModelBrand;
use App\Models\ModelParams;
use App\Models\ModelProdus;
use Illuminate\Http\Request;

class EditProdusController extends Controller
{
    public function __invoke($id)
    {
        $produsToEdit = ModelProdus::findOrFail($id);
        $params = ModelParams::all();
        $toateBrandurile = ModelBrand::all();
        return view("editProdus", compact("produsToEdit", "params", "toateBrandurile"));
    }
}
