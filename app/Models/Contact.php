<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
   	protected $primaryKey = 'id';
   	public $timestamps = false;
   	protected $guarded = ['id'];
}
