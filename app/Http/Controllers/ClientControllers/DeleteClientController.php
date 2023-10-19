<?php

namespace App\Http\Controllers\ClientControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelClient;
use Illuminate\Http\Request;

class DeleteClientController extends Controller
{
    public function __invoke($id)
    {
        $clientToDelete = ModelClient::findOrFail($id);
        $clientToDelete->delete();
        return redirect()->route("ViewAllClients");
    }
}
