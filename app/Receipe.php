<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Orderable;

class Receipe extends Model
{
    use Orderable;

    protected $fillable = [
        'title',
        'method',
        'style',
        'boil_time',
        'boil_size',
        'o_gravity',
        'f_gravity',
        'abv',
        'ibu',
        'srm',
    ];

    public function brewery() {
        return $this->belongsTo(Brewery::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
