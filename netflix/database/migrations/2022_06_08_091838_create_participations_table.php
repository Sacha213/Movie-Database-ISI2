<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->unsignedBigInteger('show_id');
            $table->foreign('show_id')
                ->references('id')
                ->on('shows')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('acteur_id');
            $table->foreign('acteur_id')
                ->references('id')
                ->on('acteurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
