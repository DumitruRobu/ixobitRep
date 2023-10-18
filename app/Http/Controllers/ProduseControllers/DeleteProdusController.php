<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use Illuminate\Http\Request;

class DeleteProdusController extends Controller
{
    public function __invoke($id)
    {
        $paramToDelete = ModelParams::findOrFail($id);
        $paramToDelete->delete();
        return redirect()->route("ViewAllParams");
    }
}
