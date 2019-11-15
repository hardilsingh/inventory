<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //

    protected $guarded = ['id', 'created_at', 'updated_at'];



    public function manufacturer() {
        return $this->belongsTo('App\CategoryManufacturer' , 'manufacturer_id');
    }

}
