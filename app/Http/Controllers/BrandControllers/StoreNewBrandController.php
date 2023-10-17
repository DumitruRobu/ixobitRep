<?php

namespace App\Http\Controllers\BrandControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\BrandControllers\StoreNewBrandRequest;
use App\Models\ModelBrand;
use Illuminate\Http\Request;

class StoreNewBrandController extends Controller
{
    public function __invoke(StoreNewBrandRequest $request)
    {

        $data = $request->validated();

        ModelBrand::create($data);
        return redirect("viewAllBrands");
    }
}
