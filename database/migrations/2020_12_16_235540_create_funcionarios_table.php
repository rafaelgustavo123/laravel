<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 2.2

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
			$table->string('nome');
            $table->string('email')->unique();
			$table->string('telefone');
			$table->string('cpf')->unique();

			$table->bigInteger('empresa_id')->unsigned(); // FK
			$table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');;
			
            $table->string('website');
			
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
        Schema::dropIfExists('funcionarios');
    }
}
