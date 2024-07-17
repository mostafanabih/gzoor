<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    protected $fillable = [
        'name','description','icone','images'
    ];
    public $timestamps = true;
    

    public function setImagesAttribute($value)
{
    $this->attributes['images'] = json_encode($value);
}

public function getImagesAttribute($value)
{
    return json_decode($value, true);
}

   
    

}
