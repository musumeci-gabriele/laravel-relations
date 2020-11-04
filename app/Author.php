<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //* creo la relazione ono to one con i Model AuthorInfo
    public function info()
    {
        return $this->hasOne("App\AuthorInfo");
    }

    //* relazione da Author vs Comics
    public function comics()
    {
        return $this->hasMany("App\Comic");
    }
}
