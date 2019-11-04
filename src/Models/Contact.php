<?php

namespace rimon\contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected  $fillable = ['name','email','message'];
}
