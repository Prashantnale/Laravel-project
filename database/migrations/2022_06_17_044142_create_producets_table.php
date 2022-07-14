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
        Schema::create('producets', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_name');
            $table->integer('p_brand');
            $table->integer('p_unit');
            $table->string('p_cat');
            $table->string('p_subcat');
            $table->string('p_mrp');
            $table->string('p_purchess_price');
            $table->string('p_sales_price');
            $table->string('p_opening_stock');
            $table->string('p_value');
            $table->string('p_tax');
            $table->string('p_img');
            $table->string('p_status')->default(0);
            $table->string('p_description');
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
        Schema::dropIfExists('producets');
    }
};
