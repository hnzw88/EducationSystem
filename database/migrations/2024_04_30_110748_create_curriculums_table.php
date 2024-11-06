<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('video_url')->nullable();
            $table->tinyInteger('alway_delivery_flg');
            $table->foreignId('grade_id')->constrained();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
};
