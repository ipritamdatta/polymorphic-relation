<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=[
        'path',
    ];
    public function imageable(){
        return $this->morphTo();
    }
}
