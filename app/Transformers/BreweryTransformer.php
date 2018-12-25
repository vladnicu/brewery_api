<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Brewery;

class BreweryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Brewery $brewery)
    {
        return [
            'name' => $brewery->name,
        ];
    }
    
}
