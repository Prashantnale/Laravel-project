<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return v
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->id('pos_id');
            $table->string('pos_name');
            $table->string('pos_number');
            $table->string('totalsub');
            $table->string('dis_p');
            $table->string('dis_amt');
            $table->string('online_amt')->default(0);
            $table->string('online_cash_amt')->default(0);
            $table->string('totaleBill');
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
        Schema::dropIfExists('pos');
    }
};
