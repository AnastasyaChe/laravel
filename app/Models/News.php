<?php

namespace App\Models;


use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [ 
    'title', 
    'text',
    'created_at', 
    'image',
];



    public function getNewsById(int $id) {
        return DB::table($this->table)
        ->select(['id', 'title', 'text', 'created_at'])
        ->where('id', $id)
        ->first();
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
