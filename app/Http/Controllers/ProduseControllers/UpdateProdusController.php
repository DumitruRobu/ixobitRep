<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ParamsControllers\UpdateParamRequest;
use App\Models\ModelBrand;
use App\Models\ModelParams;
use Illuminate\Http\Request;

class UpdateProdusController extends Controller
{
    public function __invoke(UpdateParamRequest $request, $id)
    {
        $data = $request->validated();
        $brandToEdit = ModelParams::findOrFail($id);
        $brandToEdit->update($data);

        return redirect()->route("ViewAllParams");
    }
}
