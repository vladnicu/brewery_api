<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Orderable;
use App\Receipe;

class Brewery extends Model
{
    use Orderable;

    protected $fillable = ['name'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function receipes() {
        return $this->hasMany(Receipe::class)->oldestFirst();
    }
}
