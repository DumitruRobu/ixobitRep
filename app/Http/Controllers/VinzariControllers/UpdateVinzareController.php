<?php

namespace App\Http\Controllers\VinzariControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\VinzariControllers\UpdateVinzariRequest;
use App\Models\ModelVinzari;
use Illuminate\Http\Request;

class UpdateVinzareController extends Controller
{
    public function __invoke(UpdateVinzariRequest $request, $id)
    {
        $data = $request->validated();
        $brandToEdit = ModelVinzari::findOrFail($id);
        $brandToEdit->update($data);
        return redirect()->route("ViewAllBrands");
    }
}
