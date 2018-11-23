<div class="box box-solid box-primary">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Descricao" class="control-label">Descrição</label>
            <input for="Descricao" class="form-control" type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required/>
        </div>        
    </div>
</div>