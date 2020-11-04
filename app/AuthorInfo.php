<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorInfo extends Model
{   
    protected $table = "author_info";
    public $timestamp = false;

    //creo la relazione ono to one con il Model Author
    public function author()
    {
        return $this->belongsTo("App\Author");
    }
}
