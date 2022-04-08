<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('associado_id');
            $table->double('cod_fipe');
            $table->string('placa');
            $table->string('descricao');
            $table->double('ano');
            $table->double('modelo');
            $table->string('chassi');
            $table->double('renavan');
            $table->boolean('ativo')->default(true);
            $table->boolean('fnd_reserva')->default(false);
            $table->boolean('tracao')->default(true);
            $table->string('categoria');
            $table->date('dt_inclusao');
            $table->date('dt_saida')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
