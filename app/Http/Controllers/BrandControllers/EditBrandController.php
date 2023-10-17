<?php

namespace App\Http\Controllers\BrandControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelBrand;
use Illuminate\Http\Request;

class EditBrandController extends Controller
{
    public function __invoke($id)
    {
        $brandToEdit = ModelBrand::findOrFail($id);
        return view("editBrand", compact("brandToEdit"));
    }
}
