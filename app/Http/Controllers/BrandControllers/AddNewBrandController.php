<?php

namespace App\Http\Controllers\BrandControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewBrandController extends Controller
{
    public function __invoke()
    {
        return view("addNewBrand");
    }
}
