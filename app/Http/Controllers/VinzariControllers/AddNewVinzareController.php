<?php

namespace App\Http\Controllers\VinzariControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewVinzareController extends Controller
{
    public function __invoke()
    {
        return view("addNewBrand");
    }
}
