<div class="box">
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
            <input for="CPF" class="form-control" type="text" name="cpf" value="{{ isset($registro->cpf) ? $registro->cpf : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="CNPJ" class="control-label">CNPJ</label>
            <input for="CNPJ" class="form-control" type="text" name="cnpj" value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}" required/>
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
            <input for="Telefone" class="form-control" type="text" name="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Celular" class="control-label">Celular</label>
            <input for="Celular" class="form-control" type="text" name="celular" value="{{ isset($registro->celular) ? $registro->celular : '' }}" required/>
        </div>
    </div>
    <div class="box-header with-border"> 
        <h3 class="box-title">Endereço</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Cep" class="control-label">CEP</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input for="Cep" class="form-control" type="text" name="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}"/>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-default" id="cep">Buscar CEP</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Bairro" class="control-label">Bairro</label>
                    <input for="Bairro" class="form-control" type="text" name="bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required/>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="Endereco" class="control-label">Endereço</label>
                            <input for="Endereco" class="form-control" type="text" name="endereco" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" required/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Numero" class="control-label">Número</label>
                            <input for="Numero" class="form-control" type="text" name="numero" value="{{ isset($registro->numero) ? $registro->numero : '' }}" required/>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="UF" class="control-label">UF</label>
                    <input type="text" name="hiddenEstadoSigla" value="{{ isset($registro->estado) ? $registro->estado : '' }}" hidden>
                    <select id="comboEstado" for="UF" name="estado" class="form-control" required></select>
                </div>
                <div class="form-group">
                    <label for="Cidade" class="control-label">Cidade</label>
                    <input for="Cidade" class="form-control" type="text" name="cidade" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}" required/>
                </div> 
            </div>
        </div>
    </div>
</div>
    