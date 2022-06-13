<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->primary('id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('title');
            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')
                ->references('id')
                ->on('directeurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('country');
            $table->text('date_added');
            $table->unsignedBigInteger('release_year');
            $table->text('duration');
            $table->text('description');
            $table->text('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
