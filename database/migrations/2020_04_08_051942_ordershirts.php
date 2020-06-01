<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ordershirts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirts', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('iscompleted')->default(0);
            $table->boolean('isconfirmed')->default(0);
            $table->boolean('iscanceled')->default(0);
            $table->string('Name');
            $table->string('email')->nullable;
            $table->string('Telephone');
            $table->string('Address');
            $table->string('ExpectedDate');
            $table->float('Collar');
            $table->float('Sleeve');
            $table->float('Cuff');
            $table->float('Chest');
            $table->float('Length');
            $table->string('Material');
            $table->string('colour');
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
        Schema::dropIfExists('shirts');
    }
}
