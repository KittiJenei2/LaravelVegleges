<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;


class Vehicle extends EloquentModel
{
    public $timestamps = false;
    protected $primaryKey = 'id';


    function maker()
    {
        return $this->belongsTo(Maker::class, 'makers_id');
    }

    function model()
    {
        return $this->belongsTo(Model::class, 'models_id');
    }

    function body()
    {
        return $this->belongsTo(Body::class, 'bodies_id');
    }
}
