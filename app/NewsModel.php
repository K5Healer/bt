<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table='news';
    protected $fillable=['image','content','title','Detail'];
}
