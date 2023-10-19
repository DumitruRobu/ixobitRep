<?php

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewClientController extends Controller
{
    public function __invoke()
    {
        return view("addNewClient");
    }
}
