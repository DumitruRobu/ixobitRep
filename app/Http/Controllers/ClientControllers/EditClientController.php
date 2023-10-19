<?php

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;

use App\Models\ModelClient;
use Illuminate\Http\Request;

class EditClientController extends Controller
{
    public function __invoke($id)
    {
        $clientToEdit = ModelClient::findOrFail($id);
        return view("editClient", compact("clientToEdit"));
    }
}
