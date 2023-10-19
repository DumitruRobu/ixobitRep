<?php

namespace App\Http\Controllers\ClientControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelClient;
use Illuminate\Http\Request;

class ViewAllClientsController extends Controller
{
    public function __invoke()
    {
        $allClients = ModelClient::all();
        return view("viewAllClients", compact("allClients"));
    }
}
