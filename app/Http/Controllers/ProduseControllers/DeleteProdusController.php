<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelProdus;
use Illuminate\Http\Request;

class DeleteProdusController extends Controller
{
    public function __invoke($id)
    {
        $paramToDelete = ModelProdus::findOrFail($id);
        $paramToDelete->delete();
        return redirect()->route("ViewAllProdus");
    }
}
