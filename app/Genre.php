<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // * dato protetto che verra' riempito
    protected $fillable = [
        "name"
    ];

    // * relazione to many con Comic
    public function comics()
    {
        return $this->belongsToMany("App\Comic");
    }
}
