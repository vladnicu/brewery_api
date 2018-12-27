<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brewery;
use App\Receipe;
use App\Http\Requests\StoreReceipeRequest;
use App\Transformers\ReceipeTransformer;

class ReceipeController extends Controller
{
    
    public function store(StoreReceipeRequest $request, Brewery $brewery) {
        $receipe = new Receipe;
        $receipe->title = $request->title;
        $receipe->user()->associate($request->user());

        $brewery->receipes()->save($receipe);

        return fractal()
            ->item($receipe)
            ->transformWith(new ReceipeTransformer)
            ->toArray();

    }
}
