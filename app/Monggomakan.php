<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Monggomakan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'monggomakans';
    
    protected $fillable = [
        '_id', 'namamakanan','harga','jumlah','jenismakanan'
    ];
}
