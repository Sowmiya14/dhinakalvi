<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $table = 'add_category';
    //fillable fields
    protected $fillable = ['category', 'content'];
    
    // //custom timestamps name
    // const CREATED_AT = 'created';
    // const UPDATED_AT = 'modified';
}