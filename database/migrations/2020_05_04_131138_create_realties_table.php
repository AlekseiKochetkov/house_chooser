<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realties', function (Blueprint $table) {
            $table->id();
            $table->double('lat');
            $table->double('lon');
            $table->string('address');
            $table->text('description');
            $table->float('house_area');
            $table->boolean('is_finished');
            $table->float('electricity');
            $table->boolean('water');
            $table->boolean('gas');
            $table->integer('flours');
            $table->float('area');
            $table->string('link');
            $table->bigInteger('agency_id')->unsigned();
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
        Schema::dropIfExists('realties');
    }
}
