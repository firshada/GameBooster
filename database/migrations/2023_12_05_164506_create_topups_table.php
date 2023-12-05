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
        Schema::create('topups', function (Blueprint $table) {
            $table->id('topup_id');
            $table->integer('nominal');
            $table->integer('price');
            $table->foreignId('game_id')->constrained(
                table: 'games', indexName: 'game_id'
            );
            $table->foreignId('topup_cat_id')->constrained(
                table: 'topup_categories', indexName: 'topup_cat_id'
            );
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
        Schema::dropIfExists('topups');
    }
};
