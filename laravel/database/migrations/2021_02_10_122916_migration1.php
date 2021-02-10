<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Migration1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Birre', function(Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('produttore');
            $table->string('grado_alcolico');
            $table->string('nazionalità');
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
        schema::drop('Birre');
    }
}
