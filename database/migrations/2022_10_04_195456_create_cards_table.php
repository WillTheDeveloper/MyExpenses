<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('type', ['credit', 'debit'])->nullable(false);
            $table->integer('lastfour')->nullable(false);
            $table->uuid('user_id')->nullable(false);
            $table->text('name');
            $table->string('bank');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
