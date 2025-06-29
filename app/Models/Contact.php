<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['name', 'email', 'password','image'];




    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name']=strtolower($value);

    }

    public function setEmailAttribute($val){
        $this->attributes['email']=strtolower($val);
    }
    //
}
