{{csrf_field()}}

<div class="form-group">
    <label for="cod_febraban">Cod. Febraban</label>
    <input type="text" class="form-control" id="cod_febraban" name="cod_febraban" value="{{ old('cod_febraban', $banco->cod_febraban)}}"required>
</div>

<div class="form-group">
    <label for="cod_agencia">Agência</label>
    <input type="text" class="form-control" id="cod_agencia" name="cod_agencia" value="{{ old('cod_agencia', $banco->cod_agencia)}}"required>
</div>

<div class="form-group">
    <label for="conta">Conta</label>
    <input type="text" class="form-control" id="conta" name="conta" value=" {{ old('conta', $banco->conta)}} " required>
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" value=" {{ old('descricao', $banco->descricao)}} " required>
</div>

<div class="form-group">
    <label for="gerente">Gerente</label>
    <input type="text" class="form-control" id="gerente" name="gerente" value=" {{ old('gerente', $banco->gerente)}} " required>
</div>