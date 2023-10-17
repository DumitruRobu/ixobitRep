<?php

namespace App\Http\Controllers\BrandControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelBrand;
use Illuminate\Http\Request;

class ViewAllBrandsController extends Controller
{
    public function __invoke()
    {
        $allBrands = ModelBrand::all();
        return view("viewAllBrands", compact("allBrands"));
    }
}
