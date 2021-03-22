<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'namepro',
        'imgpro',

    ];

    public function color() {

        return $this -> belongsTo(Color::class);
    }
}
