<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'title', 'description', 'is_visible'];
    protected $casts = [
        'is_visible' => 'boolean'];
    

    public function getCategoryById(int $id) {
        return DB::selectOne("SELECT * FROM categories WHERE id=:id", ['id'=>$id]);
    }
    public function news() {
        return $this->hasMany(News::class, 'category_id', 'id');//создам связь с сущностью
    }
}
