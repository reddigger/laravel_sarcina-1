<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return vpopmail_del_domain(domain)
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_country');
            $table->string('name', 100);
            $table->integer('population');
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
        Schema::dropIfExists('cities');
    }
}
