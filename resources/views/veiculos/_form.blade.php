{{csrf_field()}}


<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="ativo" checked value="{{old('ativo', $veiculo->ativo)}} ">
    <label class="form-check-label" for="flexSwitchCheckChecked">Ativo</label>
</div>

<div class="form-group">
    <label for="id_associado">Associado</label>
    <input type="text" class="form-control" id="id_associado" name="id_associado" value="{{old('id_associado', 'Colocar lista de associados')}}"required>
</div>

<div class="form-group">
    <label for="cod_fipe">Cod. FIPE</label>
    <input type="text" class="form-control" id="cod_fipe" name="cod_fipe" value="{{old('cod_fipe', $veiculo->cod_fipe)}}"required>
</div>

<div class="form-group">
    <label for="placa">Placa</label>
    <input type="text" class="form-control" id="placa" name="placa" value="{{old('placa', $veiculo->placa)}}"required>
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" value=" {{old('descricao', $veiculo->descricao)}} " required>
</div>

<div class="form-group">
    <label for="ano">Ano</label>
    <input type="text" class="form-control" id="ano" name="ano" value=" {{old('ano', $veiculo->ano)}} " required>
</div>

<div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" id="modelo" name="modelo" value=" {{old('modelo', $veiculo->modelo)}} ">
</div>

<div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="categoria" value=" {{old('categoria', $veiculo->categoria)}} " required>
</div>

<div class="form-group">
    <label for="chassi">Chassi</label>
    <input type="text" class="form-control" id="chassi" name="chassi" value=" {{old('chassi', $veiculo->chassi)}} " required>
</div>

<div class="form-group">
    <label for="renavan">Renavan</label>
    <input type="text" class="form-control" id="renavan" name="renavan" value=" {{old('renavan', $veiculo->renavan)}} " required>
</div>

<br>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="ativo" value="{{old('fnd_reserva', $veiculo->fnd_reserva)}} ">
    <label class="form-check-label" for="flexSwitchCheckChecked">Fundo de Reserva</label>
</div>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="ativo" value="{{old('tracao', $veiculo->tracao )}} ">
    <label class="form-check-label" for="flexSwitchCheckChecked">Tração</label>
</div>

<div class="form-group">
    <label for="dt_inclusao">Data de inclusão</label>
    <input type="date" class="form-control" id="dt_inclusao" name="dt_inclusao" value=" {{old('dt_inclusao', $veiculo->dt_inclusao)}} ">
</div>

<div class="form-group">
    <label for="dt_saida">Data de saida</label>
    <input type="date" class="form-control" id="dt_saida" name="dt_saida" value=" {{old('dt_saida', $veiculo->dt_saida)}} ">
</div>