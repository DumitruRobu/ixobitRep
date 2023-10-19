<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProdusControllers\UpdateProdusRequest;
use App\Models\ModelProdus;
use Illuminate\Http\Request;

class UpdateProdusController extends Controller
{
    public function __invoke(UpdateProdusRequest $request, $id)
    {

        $data = $request->validated();
        $productToEdit = ModelProdus::findOrFail($id);
        $productToEdit->update($data);

        return redirect()->route("ViewProdus", ['id' => $id]);
    }
}
