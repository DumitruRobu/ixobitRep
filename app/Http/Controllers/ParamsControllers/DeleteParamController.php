<?php

namespace App\Http\Controllers\ParamsControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelParams;
use Illuminate\Http\Request;

class DeleteParamController extends Controller
{
    public function __invoke($id)
    {
        $paramToDelete = ModelParams::findOrFail($id);
        $paramToDelete->delete();
        return redirect()->route("ViewAllParams");
    }
}
