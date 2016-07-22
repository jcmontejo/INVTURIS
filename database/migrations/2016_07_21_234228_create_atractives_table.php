<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtractivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atractives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('name');
            $table->string('region');
            $table->string('province');
            $table->string('district');
            $table->string('category');
            $table->string('type');
            $table->string('sub_type');
            $table->string('description');
            $table->string('particularities');
            $table->string('actual_state');
            $table->string('observations');
            $table->string('type_visit');
            $table->string('land');
            $table->string('aereal');
            $table->string('maritime');
            $table->string('river');
            $table->string('name_image');
            $table->string('image');
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
        Schema::drop('atractives');
    }
}
