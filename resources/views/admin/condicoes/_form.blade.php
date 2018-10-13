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
            <label for="Vista" class="control-label">Permitir Parcelamento</label>
            <input for="Vista" class="form-control" type="checkbox" name="vista" value="{{ isset($registro->vista) ? $registro->vista : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Parcela" class="control-label">Parcelamento Máximo</label>
            <input for="Parcela" class="form-control" type="number" min="0" value="0" step=".01" name="parcela" value="{{ isset($registro->qtd_parcelas) ? $registro->qtd_parcelas : '' }}" required/>
        </div>
    </div>
</div>