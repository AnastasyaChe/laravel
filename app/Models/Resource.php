<?php

namespace App\Models;


use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Resource extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'url', 
    'created_at',
    
];

}
