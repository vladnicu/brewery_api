<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreBreweryRequest;
use App\Brewery;

class BreweryController extends Controller
{
    public function store(StoreBreweryRequest $request) {
        $brewery = new Brewery;
        $brewery->name = $request->name;
        $brewery->user()->associate($request->user());

        $brewery->save();
    }
    
}
