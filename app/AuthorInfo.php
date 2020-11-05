<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorInfo extends Model
{   
    protected $table = "author_info";
    public $timestamp = false;

    //* Creo la relazione Inversa one to one con il Model Author
    public function author()
    {
        return $this->belongsTo("App\Author");
    }
}
