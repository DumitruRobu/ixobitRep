<?php

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClientControllers\StoreNewClientRequest;
use App\Models\ModelClient;
use Illuminate\Http\Request;

class StoreNewClientController extends Controller
{
    public function __invoke(StoreNewClientRequest $request)
    {
        $data = $request->validated();
        ModelClient::create($data);
        return redirect("viewAllClients");
    }
}
