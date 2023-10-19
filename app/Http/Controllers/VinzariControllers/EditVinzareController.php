<?php

namespace App\Http\Controllers\VinzariControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelVinzari;
use Illuminate\Http\Request;

class EditVinzareController extends Controller
{
    public function __invoke($id)
    {
        $brandToEdit = ModelVinzari::findOrFail($id);
        return view("editBrand", compact("brandToEdit"));
    }
}
