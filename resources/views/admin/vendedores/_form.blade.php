<div class="box box-solid box-primary">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Nome" class="control-label">Nome</label>
            <input for="Nome" class="form-control" type="text" name="nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="RG" class="control-label">RG</label>
        <input for="RG" class="form-control" type="text" name="rg" value="{{ isset($registro->rg) ? $registro->rg : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="CPF" class="control-label">CPF</label>
            <input for="CPF" class="form-control cpf" type="text" name="cpf" value="{{ isset($registro->cpf) ? $registro->cpf : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="CNPJ" class="control-label">CNPJ</label>
            <input for="CNPJ" class="form-control cnpj" type="text" name="cnpj" value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Nasc" class="control-label">Data de Nascimento</label>
            <input for="Nasc" class="form-control" type="date" name="nascimento" value="{{ isset($registro->nascimento) ? $registro->nascimento : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Email" class="control-label">Email</label>
            <input for="Email" class="form-control" type="text" name="email" value="{{ isset($registro->email) ? $registro->email : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Telefone" class="control-label">Telefone Fixo</label>
            <input for="Telefone" class="form-control telFixo" type="text" name="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Celular" class="control-label">Celular</label>
            <input for="Celular" class="form-control telCel" type="text" name="celular" value="{{ isset($registro->celular) ? $registro->celular : '' }}" required/>
        </div>
    </div>
    <div class="box-header with-border"> 
        <h3 class="box-title">Endereço</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Cep" class="control-label">CEP</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input for="Cep" class="form-control cep" type="text" name="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}"/>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-default" id="cep">Buscar CEP</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="Endereco" class="control-label">Endereço</label>
                <input for="Endereco" class="form-control" type="text" name="endereco" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" required/>
            </div>
            <div class="col-md-1">
                <label for="Numero" class="control-label">Número</label>
                <input for="Numero" class="form-control" type="text" name="numero" value="{{ isset($registro->numero) ? $registro->numero : '' }}" required/>
            </div>
            <div class="col-md-3">
                <label for="Complemento" class="control-label">Complemento</label>
                <input for="Complemento" class="form-control" type="text" name="complemento" value="{{ isset($registro->complemento) ? $registro->complemento : '' }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Bairro" class="control-label">Bairro</label>
                    <input for="Bairro" class="form-control" type="text" name="bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Cidade" class="control-label">Cidade</label>
                    <input for="Cidade" class="form-control" type="text" name="cidade" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}" required/>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="UF" class="control-label">UF</label>
                    <input type="text" name="hiddenEstadoSigla" value="{{ isset($registro->estado) ? $registro->estado : '' }}" hidden>
                    <select id="comboEstado" for="UF" name="estado" class="form-control" required></select>
                </div>
            </div>
        </div>
    </div>
</div>
    