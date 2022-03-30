{{csrf_field()}}
<div class="form-group">
    <div>
        <b> Tipo Jurídico </b>
    </div>
    {{-- Identificar como pegar o parametro na URL para utilizar para setar a pessoa --}}
    <div class="form-group">
        <label>
            <input type="radio" name="tipo_associado" value="cpf" {{ old('tipo_associado', $associado->tipo_associado == 'cpf'? 'checked':'')}} " required>
            Pessoa Física 
        </label>
    </div>

    <div class="form-group">
        <label>
            <input type="radio" name="tipo_associado" value="cnpj" {{ old('tipo_associado', $associado->tipo_associado == 'cnpj'? 'checked':'')}} "required> 
            Pessoa Jurídica
        </label>
    </div>
</div>

<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $associado->nome)}}"required>
</div>

<div class="form-group">
    <label for="cpf_cnpj">CPF / CNPJ</label>
    <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value=" {{old('cpf_cnpj', $associado->cpf_cnpj)}} " required>
</div>

<div class="form-group">
    <label for="ie_rg">Inscrição Estadual / RG</label>
    <input type="text" class="form-control" id="ie_rg" name="ie_rg" value=" {{old('ie_rg', $associado->ie_rg)}} " required>
</div>

<div class="form-group">
    <label for="orgao_expedidor">Orgão Expedidor</label>
    <input type="text" class="form-control" id="orgao_expedidor" name="orgao_expedidor" value=" {{old('orgao_expedidor', $associado->orgao_expedidor )}} ">
</div>

<div class="form-group">
    <label for="dt_expedicao">Data Expedição / Fundação</label>
    <input type="date" class="form-control" id="dt_expedicao" name="dt_expedicao" value=" {{old('dt_expedicao', $associado->dt_expedicao)}} ">
</div>

<div class="form-group">
    <label for="sexo">Sexo</label>
    <div class="radio">
        <label>
            <input type="radio" name="sexo" value="m" {{old('sexo', $associado->sexo == 'm' ? 'checked' : '')}} "> Masculino
        </label>
    </div>

    <div class="radio">
        <label>
            <input type="radio" name="sexo" value="f" {{old('sexo', $associado->sexo  == 'f' ? 'checked' : 'Feminino')}} "> Feminino
        </label>
    </div>
</div>

<div class="form-group">
    <label for="estado_civil">Estado Civil</label>
    <select class="form-control" name="estado_civil" id="estado_civil" value=" {{old('estado_civil', $associado->estado_civil)}} ">
        <option value="">Selecione o estado civil</option>
        <option value="1" >Solteiro</option>
        <option value="2" >Casado</option>
        <option value="3" >Divorciado</option>
    </select>
</div>

<div class="form-group">
    <label for="dt_nascimento">Data de Nascimento</label>
    <input type="text" class="form-control" id="dt_nascimento" name="dt_nascimento" value="{{old('dt_nascimento', $associado->dt_nascimento)}}" required>
</div>
<div class="form-group">
    <label for="indicacao">Indicação</label>
    <input type="text" class="form-control" id="indicacao" name="indicacao" value=" {{old('indicacao', $associado->indicacao)}} ">
</div>
<div class="form-group">
    <label for="nome_cobranca">Nome Cobrança</label>
    <input type="text" class="form-control" id="nome_cobranca" name="nome_cobranca" value=" {{old('nome_cobranca', $associado->nome_cobranca)}} ">
</div>
<div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input type="text" class="form-control" id="logradouro" name="logradouro" value=" {{old('logradouro', $associado->logradouro)}} " required>
</div>
<div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" value=" {{old('numero', $associado->numero)}} " required>
</div>
<div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" value=" {{old('bairro', $associado->bairro)}} " required>
</div>
<div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" value=" {{old('cidade', $associado->cidade)}} " required>
</div>
<div class="form-group">
    <label for="uf">UF</label>
    <input type="text" class="form-control" id="uf" name="uf" value=" {{old('uf', $associado->uf)}} " required>
</div>
<div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" name="cep" value=" {{old('cep', $associado->cep)}} " required>
</div>
<div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="phone" class="form-control" id="telefone" name="telefone" value=" {{old('telefone', $associado->telefone)}} ">
</div>
<div class="form-group">
    <label for="celular">Celular</label>
    <input type="cel-phone" class="form-control" id="celular" name="celular" value=" {{old('celular', $associado->celular)}} " required>
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value=" {{old('email', $associado->email)}} " required>
</div>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="ativo" value="{{old('protesta_titilo', $associado->protesta_titilo)}} ">
    <label class="form-check-label" for="flexSwitchCheckChecked">Protesta Título</label>
</div>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="ativo" value="{{old('rateio_bloqueado', $associado->rateio_bloqueado)}} ">
    <label class="form-check-label" for="flexSwitchCheckChecked">Rateio Bloqueado</label>
</div>

<div class="form-group">
    <label for="dt_saida">Data de Saida</label>
    <input type="date" class="form-control" id="dt_saida" name="dt_saida" value=" {{old('dt_saida', $associado->dt_saida)}} ">
</div>