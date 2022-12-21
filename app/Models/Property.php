<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
//    use HasFactory;

    protected $table = 'properties';

    protected $fillable = ['keywords', 'name', 'meta_description' , 'price' , 'property_type' ,  'description' , 'full_address', 'bedrooms_count' , 'bathrooms_count' , 'living_area' ];

}
