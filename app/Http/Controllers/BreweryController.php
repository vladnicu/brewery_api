<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreBreweryRequest;
use App\Brewery;
use App\Transformers\BreweryTransformer;

class BreweryController extends Controller
{
    public function show(Brewery $brewery) {
        return fractal()
            ->item($brewery)
            //TODO aici trebuie sa pui parseIncludes
            ->transformWith(new BreweryTransformer)
            ->toArray();
    }

    public function store(StoreBreweryRequest $request) {
        $brewery = new Brewery;
        $brewery->name = $request->name;
        $brewery->user()->associate($request->user());

        $brewery->save();

        return fractal()
            ->item($brewery)
            ->transformWith(new BreweryTransformer)
            ->toArray();
    }

    public function update(StoreBreweryRequest $request, Brewery $brewery) {

        $this->authorize('update', $brewery);
        
        $brewery->name = $request->get('name', $brewery->name);
        $brewery->save();

        return fractal()
            ->item($brewery)
            ->transformWith(new BreweryTransformer)
            ->toArray();
    }
    
}
