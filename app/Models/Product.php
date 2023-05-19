<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'idproduct';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'idcroduct', 'idcategory');
    }
}
