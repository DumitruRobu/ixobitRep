<?php

namespace App\Http\Controllers\BrandControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelBrand;
use Illuminate\Http\Request;

class DeleteBrandController extends Controller
{
    public function __invoke($id)
    {
        $brandToDelete = ModelBrand::findOrFail($id);
        $brandToDelete->delete();
        return redirect()->route("ViewAllBrands");
    }
}
