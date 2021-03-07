<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $guarded = ['id'];
    public $timestamps = false;
    use HasFactory;
}
