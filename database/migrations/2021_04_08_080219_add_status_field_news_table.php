<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFieldNewsTable extends Migration
{
   public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->enum('status', ['draft', 'published', 'blocked'])->default('draft');
        });
    }

    
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
