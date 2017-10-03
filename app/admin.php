<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
     protected $table='Entry';
    protected $fillable = [
        'f_name','l_name','email','phone','location','subloacation','budget','config',
        
    ];}
