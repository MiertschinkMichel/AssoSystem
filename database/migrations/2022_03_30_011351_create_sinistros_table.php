<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('associado_id')->default('1');
            $table->string('veiculo_1');
            $table->string('veiculo_2')->nullable();
            $table->string('veiculos_3')->nullable();
            $table->date('dt_sinistro');
            $table->string('num_bo')->nullable();
            $table->text('ocorrencia')->nullable();
            $table->string('responsavel')->nullable();
            $table->text('observacao')->nullable();
            $table->string('localidade')->nullable();
            $table->double('vl_veiculo')->nullable();
            $table->double('vl_carroceria')->nullable();
            $table->double('orcamento_prev')->nullable();
            $table->double('custo_transporte')->nullable();
            $table->double('custos_extras')->nullable();
            $table->double('franquia')->nullable();
            $table->double('salvados')->nullable();
            $table->string('oficina')->nullable();
            $table->string('descricao')->nullable();
            $table->date('dt_cobranca')->nullable();
            $table->integer('parcelas')->nullable();
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
        Schema::dropIfExists('sinistros');
    }
}
