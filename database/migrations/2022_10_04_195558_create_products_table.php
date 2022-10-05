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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('item')->nullable(false);
            $table->text('details');
            $table->integer('brand_id')->nullable(false);
            $table->integer('card_id')->nullable(false);
            $table->integer('category_id')->nullable(false);
            $table->integer('supplier_id')->nullable(false);
            $table->date('ordered_on')->comment('The date the request was placed for the item');
            $table->date('delivered_on')->comment('The date that the item was in possession of its owner.');
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
        Schema::dropIfExists('products');
    }
};
