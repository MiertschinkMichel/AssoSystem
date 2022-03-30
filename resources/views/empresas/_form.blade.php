{{csrf_field()}}

<div class="form-group">
    <label for="razao_social">Razão Social</label>
    <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{old('razao_social', $empresa->razao_social)}}"required>
</div>

<div class="form-group">
    <label for="nome_fantasia">Nome Fantasia</label>
    <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value="{{old('nome_fantasia', $empresa->nome_fantasia)}}"required>
</div>

<div class="form-group">
    <label for="cnpj">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name="cnpj" value=" {{old('cnpj', $empresa->cnpj)}} " required>
</div>

<div class="form-group">
    <label for="ie">Inscrição Estadual</label>
    <input type="text" class="form-control" id="ie" name="ie" value=" {{old('ie', $empresa->ie)}} " required>
</div>

<div class="form-group">
    <label for="dt_fundacao">Data da Fundação</label>
    <input type="date" class="form-control" id="dt_fundacao" name="dt_fundacao" value=" {{old('dt_fundacao', $empresa->dt_fundacao)}} ">
</div>

<div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input type="text" class="form-control" id="logradouro" name="logradouro" value=" {{old('logradouro', $empresa->logradouro)}} " required>
</div>
<div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" value=" {{old('numero', $empresa->numero)}} " required>
</div>
<div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" value=" {{old('bairro', $empresa->bairro)}} " required>
</div>
<div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value=" {{old('cidade', $empresa->cidade)}} " required>
</div>
<div class="form-group">
    <label for="uf">UF</label>
    <input type="text" class="form-control" id="uf" name="uf" value=" {{old('uf', $empresa->uf )}} " required>
</div>
<div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" name="cep" value=" {{old('cep', $empresa->cep)}} " required>
</div>
<div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="phone" class="form-control" id="telefone" name="telefone" value=" {{old('telefone', $empresa->telefone)}} ">
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="cel-phone" class="form-control" id="celular" name="celular" value=" {{old('celular', $empresa->celular)}} " required>
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value=" {{old('email', $empresa->email)}} " required>
</div>
