<div class="box">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Descricao" class="control-label">Descrição</label>
            <input for="Descricao" class="form-control" type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Categoria" class="control-label">Categoria</label>
            <input for="Categoria" class="form-control" type="text" name="categoria" value="{{ isset($registro->categoria) ? $registro->categoria : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Marca" class="control-label">Marca</label>
            <input for="Marca" class="form-control" type="text" name="marca" value="{{ isset($registro->marca) ? $registro->marca : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Tipo" class="control-label">Tipo</label>
            <input for="Tipo" class="form-control" type="date" name="tipo" value="{{ isset($registro->tipo) ? $registro->tipo : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Modelo" class="control-label">Modelo</label>
            <input for="Modelo" class="form-control" type="text" name="modelo" value="{{ isset($registro->modelo) ? $registro->modelo : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Catalogo" class="control-label">Catálogo</label>
            <input for="Catalogo" class="form-control" type="text" name="catalogo" value="{{ isset($registro->catalogo) ? $registro->catalogo : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Cor" class="control-label">Cor</label>
            <input for="Cor" class="form-control" type="text" name="telefone" value="{{ isset($registro->cor) ? $registro->cor : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Peso" class="control-label">Peso</label>
            <input for="Peso" class="form-control" type="text" name="peso" value="{{ isset($registro->peso) ? $registro->peso : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Valor" class="control-label">Valor Unitário</label>
            <input for="Valor" class="form-control" type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" required/>
        </div>
    </div>

    <div class="box-header with-border"> 
        <h3 class="box-title">Foto</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control" type="file" name="foto" value="{{ isset($registro->foto) ? $registro->foto : '' }}"/>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>