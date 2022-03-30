<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo_associado')->default(\App\Models\Associado::PESSOA_FISICA);
            $table->string('cpf_cnpj');
            $table->string('ie_rg');
            $table->string('orgao_expedidor')->nullable();
            $table->date('dt_expedicao')->nullable();
            $table->char('sexo', 10)->nullable();
            $table->enum('estado_civil', array_keys(\App\Models\Associado::ESTADO_CIVIL))->nullable();
            $table->date('dt_nascimento');
            $table->string('indicacao')->nullable();
            $table->string('nome_cobranca')->nullable();
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('telefone')->nullable();
            $table->string('celular');
            $table->string('email');
            $table->boolean('protesta_titulo')->nullable();
            $table->boolean('rateio_bloqueado')->nullable();
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
        Schema::dropIfExists('associados');
    }
}
