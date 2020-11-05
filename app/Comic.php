<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //* creo la relazione one to one con il Model Author
    public function author()
    {
        return $this->belongsTo("App\Author");
    }

    // * relazione many to many con genre
    public function genres()
    {
        return $this->belongsToMany("App\Genre");
    }
}
