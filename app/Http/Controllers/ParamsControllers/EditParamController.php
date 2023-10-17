<?php

namespace App\Http\Controllers\ParamsControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use Illuminate\Http\Request;

class EditParamController extends Controller
{
    public function __invoke($id)
    {
        $paramToEdit = ModelParams::findOrFail($id);
        return view("editParam", compact("paramToEdit"));
    }
}
