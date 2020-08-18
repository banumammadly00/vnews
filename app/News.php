<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    const UPDATED_AT = null;

    use Searchable;

    protected $fillable= [ 'title', 'body' , 'updated' ];

    protected $casts = [
        'status' => 1,
    ];

    public  function scopeActive($data){

        return $data->where('status', 1);
    }


    public function searchableAs()
    {
        return 'id';
    }
}
