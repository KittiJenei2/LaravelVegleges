<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    public $timestamps = false;

    function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    function model()
    {
        return $this->belongsTo(Model::class);
    }

    function body()
    {
        return $this->belongsTo(Body::class);
    }
}
