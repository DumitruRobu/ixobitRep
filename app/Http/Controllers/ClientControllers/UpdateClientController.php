<?php

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClientControllers\UpdateClientRequest;
use App\Models\ModelClient;
use Illuminate\Http\Request;

class UpdateClientController extends Controller
{
    public function __invoke(UpdateClientRequest $request, $id)
    {
        $data = $request->validated();
        $clientToEdit = ModelClient::findOrFail($id);
        $clientToEdit->update($data);

        return redirect()->route("ViewAllClients");
    }
}
