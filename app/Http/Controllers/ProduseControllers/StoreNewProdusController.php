<?php

namespace App\Http\Controllers\ProduseControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProdusControllers\StoreNewProdusRequest;

use App\Models\ModelProdus;
use Illuminate\Http\Request;

class StoreNewProdusController extends Controller
{
    public function __invoke(StoreNewProdusRequest $request)
    {
        $data = $request->validated();
        ModelProdus::create($data);
        return redirect("viewAllProdus");
    }
}
