<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function getCategories(bool $isAdmin = false) {
        if(!$isAdmin) {
            return DB::table($this->table)
            ->select(['id', 'title', 'description', 'created_at'])
            ->where('is_visible', true)
            ->get();
        }
        return DB::table($this->table)
            ->select(['id', 'title', 'description','created_at'])
            ->get();

        
    }

    public function getCategoryById(int $id) {
        return DB::selectOne("SELECT * FROM categories WHERE id=:id", ['id'=>$id]);
    }
}
