<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [ 'comment','news_id', 'user_id', 'user_name', 'created' ];
}
