<?php

namespace App\Http\Controllers\VinzariControllers;
use App\Http\Controllers\Controller;

use App\Models\ModelVinzari;
use Illuminate\Http\Request;

class ViewAllVinzariController extends Controller
{
    public function __invoke()
    {
        $allVinzari = ModelVinzari::all();
        return view("viewAllVinzari", compact("allVinzari"));
    }
}
