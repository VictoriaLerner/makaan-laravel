<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Property extends Model implements HasMedia
{
//    use HasFactory;
    use InteractsWithMedia;
    protected $table = 'properties';

    protected $fillable = ['keywords', 'name', 'meta_description' , 'price' , 'property_type' ,  'description' , 'full_address', 'bedrooms_count' , 'bathrooms_count' , 'living_area' ];

}
