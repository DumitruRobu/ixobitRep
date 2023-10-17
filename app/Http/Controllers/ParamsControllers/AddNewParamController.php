<?php

namespace App\Http\Controllers\ParamsControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNewParamController extends Controller
{
    public function __invoke()
    {
        return view("addNewParam");
    }
}
