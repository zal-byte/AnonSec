<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnonSec extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','content','nickname','date','img_identifier','tag_identifier'
    ];
}
