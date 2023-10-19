<?php

namespace App\Http\Controllers\VinzariControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\VinzariControllers\StoreNewVinzariRequest;
use App\Models\ModelProdus;
use App\Models\ModelVinzari;
use Illuminate\Http\Request;

class StoreNewVinzareController extends Controller
{
    public function __invoke(StoreNewVinzariRequest $request)
    {
        $data = $request->validated();
        ModelVinzari::create($data);

        $idProdus = $data['id_produs'];

        $produsToDelete = ModelProdus::findOrFail($idProdus);
        $produsToDelete->delete();

        return redirect("viewAllProdus");
    }
}

