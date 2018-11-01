<div class="box">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Descricao" class="control-label">Descrição</label>
            <input for="Descricao" class="form-control" type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required/>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="parcelamento" value="aceita" {{ $registro->vista == true ? 'checked' : '' }}/>
                <strong>Permitir Parcelamento</strong>
            </label>
        </div>
        <div class="form-group">
            <label for="Parcela" class="control-label">Parcelamento Máximo</label>
            <input for="Parcela" class="form-control" type="number" name="parcela" value="{{ isset($registro->qtd_parcelas) ? $registro->qtd_parcelas : '' }}" required/>
        </div>
    </div>
</div>