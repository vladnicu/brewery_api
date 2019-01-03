<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\Receipe;

class ReceipeTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Receipe $receipe)
    {
        return [
            'name' => $receipe->title,
        ];
    }
    
}
