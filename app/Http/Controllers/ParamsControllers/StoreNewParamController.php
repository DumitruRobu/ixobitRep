<?php

namespace App\Http\Controllers\ParamsControllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\ParamsControllers\StoreNewParamRequest;

use App\Models\ModelParams;
use Illuminate\Http\Request;

class StoreNewParamController extends Controller
{
    public function __invoke(StoreNewParamRequest $request)
    {
        $data = $request->validated();
        ModelParams::create($data);
        return redirect("viewAllParams");
    }
}
