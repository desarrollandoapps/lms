<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_curso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('users');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_curso');
    }
}
