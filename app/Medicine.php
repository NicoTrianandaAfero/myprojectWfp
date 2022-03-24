<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //harus bisa melihat category sesuai kolom category_id
    public function category()
    {
        return $this->belongsTo('App\Category','category_id'); //belongsTo = bergantung
    }
}
