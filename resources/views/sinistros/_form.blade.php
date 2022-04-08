{{csrf_field()}}

<div class="form-group">
    <label for="associado_id">Associado</label>
    <input type="text" class="form-control" id="associado_id" name="associado_id" value="{{ old('associado_id', $sinistro->associado_id)}}"required>
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('descricao', $sinistro->descricao)}}" required>
</div>

<div class="form-group">
    <label for="veiculo_1">Veículo</label>
    <input type="text" class="form-control" id="veiculo_1" name="veiculo_1" value="{{ old('veiculo_1', $sinistro->veiculo_1)}}" required>
</div>

<div class="form-group">
    <label for="veiculo_2">Veículo atrelado 1</label>
    <input type="text" class="form-control" id="veiculo_2" name="veiculo_2" value="{{ old('veiculo_2', $sinistro->veiculo_2)}}">
</div>

<div class="form-group">
    <label for="veiculo_3">Veículo atrelado 2</label>
    <input type="text" class="form-control" id="veiculo_3" name="veiculo_3" value="{{ old('veiculo_3', $sinistro->veiculo_3)}}">
</div>

<div class="form-group">
    <label for="dt_sinistro">Data do Sinistro</label>
    <input type="date" class="form-control" id="dt_sinistro" name="dt_sinistro" value="{{ old('dt_sinistro', $sinistro->dt_sinistro)}}" required>
</div>

<div class="form-group">
    <label for="num_bo">Boletim de Ocorrência</label>
    <input type="text" class="form-control" id="num_bo" name="num_bo" value="{{ old('num_bo', $sinistro->num_bo)}}">
</div>

{{-- Trocar tipo de preenchimento--}}
<div class="form-group">
    <label for="ocorrencia">Ocorrência</label>
    <input type="text" class="form-control" id="ocorrencia" name="ocorrencia" value="{{ old('ocorrencia', $sinistro->ocorrencia)}}">
</div>

<div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{ old('responsavel', $sinistro->responsavel)}}">
</div>

<div class="form-group">
    <label for="observacao">Observação</label>
    <input type="text" class="form-control" id="observacao" name="observacao" value="{{ old('observacao', $sinistro->observacao)}}">
</div>

<div class="form-group">
    <label for="localidade">Localidade</label>
    <input type="text" class="form-control" id="localidade" name="localidade" value="{{ old('localidade', $sinistro->localidade)}}">
</div>

<div class="form-group">
    <label for="vl_veiculo">Valor do Veículo</label>
    <input type="text" class="form-control" id="vl_veiculo" name="vl_veiculo" value="{{ old('vl_veiculo', $sinistro->vl_veiculo)}}">
</div>

<div class="form-group">
    <label for="vl_carroceria">Valor da Carroceria</label>
    <input type="text" class="form-control" id="vl_carroceria" name="vl_carroceria" value="{{ old('vl_carroceria', $sinistro->vl_carroceria)}}">
</div>

<div class="form-group">
    <label for="orcamento_prev">Orçamento Previsto</label>
    <input type="text" class="form-control" id="orcamento_prev" name="orcamento_prev" value="{{ old('orcamento_prev', $sinistro->orcamento_prev)}}">
</div>

<div class="form-group">
    <label for="custo_trasporte">Custo do transporte</label>
    <input type="text" class="form-control" id="custo_trasporte" name="custo_trasporte" value="{{ old('custo_trasporte', $sinistro->custo_trasporte)}}">
</div>

<div class="form-group">
    <label for="custos_extras">Custos Extras</label>
    <input type="text" class="form-control" id="custos_extras" name="custos_extras" value="{{ old('custos_extras', $sinistro->custos_extras)}}">
</div>

<div class="form-group">
    <label for="fanquia">Fanquia</label>
    <input type="text" class="form-control" id="fanquia" name="fanquia" value="{{ old('fanquia', $sinistro->fanquia)}}">
</div>

<div class="form-group">
    <label for="salvados">Salvados</label>
    <input type="text" class="form-control" id="salvados" name="salvados" value="{{ old('salvados', $sinistro->salvados)}}">
</div>

<div class="form-group">
    <label for="oficina">Oficina</label>
    <input type="text" class="form-control" id="oficina" name="oficina" value="{{ old('oficina', $sinistro->oficina)}}">
</div>

<div class="form-group">
    <label for="dt_cobranca">Data da Cobrança</label>
    <input type="date" class="form-control" id="dt_cobranca" name="dt_cobranca" value="{{ old('dt_cobranca', $sinistro->dt_cobranca)}}">
</div>


{{-- Calcular --}}
<div class="form-group">
    <label for="parcelas">Parcelas</label>
    <input type="text" class="form-control" id="parcelas" name="parcelas" value="{{ old('parcelas', $sinistro->parcelas)}}">
</div>