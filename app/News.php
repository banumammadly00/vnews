<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    const UPDATED_AT = null;

    use Searchable;

    protected $fillable= [ 'title', 'body' , 'updated' ];

    public function searchableAs()
    {
        return 'id';
    }
}
