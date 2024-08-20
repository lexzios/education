<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Provider extends Model {
	
   protected $table = 'mstr_provider';
   
   protected $fillable=[
        'id_provider',
        'name',
        'address',
        'phone',
        'is_active'
    ];
}