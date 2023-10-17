<?php

namespace App\Http\Controllers\BrandControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\BrandControllers\UpdateBrandRequest;
use App\Models\ModelBrand;
use Illuminate\Http\Request;

class UpdateBrandController extends Controller
{
    public function __invoke(UpdateBrandRequest $request, $id)
    {

        $data = $request->validated();
        $brandToEdit = ModelBrand::findOrFail($id);
        $brandToEdit->update($data);

        return redirect()->route("ViewAllBrands");
    }
}
