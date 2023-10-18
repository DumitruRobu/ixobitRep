<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;
use App\Models\ModelParams;
use Illuminate\Http\Request;

class EditProdusController extends Controller
{
    public function __invoke($id)
    {
        $paramToEdit = ModelParams::findOrFail($id);
        return view("editParam", compact("paramToEdit"));
    }
}
