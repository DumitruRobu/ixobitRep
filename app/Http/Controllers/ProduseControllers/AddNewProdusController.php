<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;
use App\Models\ModelBrand;
use App\Models\ModelParams;
use Illuminate\Http\Request;

class AddNewProdusController extends Controller
{
    public function __invoke()
    {
        $toateBrandurile = ModelBrand::all();
        $totiParametrii = ModelParams::all();
        return view("addNewProdus", compact("toateBrandurile", "totiParametrii"));
    }
}
