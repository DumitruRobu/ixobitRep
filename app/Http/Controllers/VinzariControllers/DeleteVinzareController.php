<?php

namespace App\Http\Controllers\VinzariControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelVinzari;
use Illuminate\Http\Request;

class DeleteVinzareController extends Controller
{
    public function __invoke($id)
    {
        $brandToDelete = ModelVinzari::findOrFail($id);
        $brandToDelete->delete();
        return redirect()->route("ViewAllBrands");
    }
}
