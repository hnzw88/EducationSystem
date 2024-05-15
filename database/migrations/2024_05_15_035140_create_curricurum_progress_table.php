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
        Schema::create('curricurum_progress', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('curriculumus_id');
            $table->integer('users_id');
            $table->tinyInteger('clear_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricurum_progress');
    }
};
