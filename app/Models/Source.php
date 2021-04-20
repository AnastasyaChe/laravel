<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Source extends Model
{
    use HasFactory;
    protected $table = 'sources';

    public function getSources() {
        return DB::table($this->table)
        ->select(['id', 'title'])
        ->get();
    }

    public function getSourceById(int $id) {
        return DB::selectOne("SELECT * FROM sources WHERE id=:id", ['id'=>$id]);
    }
}

