<?php

namespace App\Http\Controllers\ProduseControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelClient;
use App\Models\ModelProdus;
use Illuminate\Http\Request;

class BuyProdusController extends Controller
{
    public function __invoke($id)
    {
        $produs = ModelProdus::findOrFail($id);
        $clients = ModelClient::all();
        return view("buyProdus", compact("produs", "clients"));
    }
}
