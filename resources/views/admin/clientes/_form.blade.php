<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Dados Gerais
            </div>
            <div class="card-body">
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
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Endereço
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Cep" class="control-label">CEP</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <input for="Cep" class="form-control" type="text" name="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}"/>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-default btn-generico" href="#">Buscar CEP</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Bairro" class="control-label">Bairro</label>
                            <input for="Bairro" class="form-control" type="text" name="bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="Endereco" class="control-label">Endereço</label>
                            <input for="Endereco" class="form-control" type="text" name="endereco" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="Numero" class="control-label">Número</label>
                            <input for="Numero" class="form-control" type="text" name="numero" value="{{ isset($registro->numero) ? $registro->numero : '' }}" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="UF" class="control-label">UF</label>
                            <select for="UF" name="estado" class="form-control" required>
                                <option selected="selected">{{ isset($registro->estado) ? $registro->estado : '' }}</option>
                                <option value="ES">ES</option>
                                <option value="MG">MG</option>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Cidade" class="control-label">Cidade</label>
                            <input for="Cidade" class="form-control" type="text" name="cidade" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="Logradouro" class="control-label">Logradouro</label>
                            <input for="Logradouro" class="form-control" type="text" name="logradouro" value="{{ isset($registro->logradouro) ? $registro->logradouro : '' }}" required/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>


