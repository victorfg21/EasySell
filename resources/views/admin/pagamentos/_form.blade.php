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
            <label for="Condicao" class="control-label">Condição de Pagamento</label>
            <input for="Condicao" class="form-control" type="hidden" name="id_condicao" value="{{ isset($registro->id_condicao) ? $registro->id_condicao : '' }}" required/>
            <input for="Condicao" class="form-control" type="text" name="desc_condicao" value="" disabled />
        </div>
        <div class="form-group">
            <label for="Desconto" class="control-label">Desconto %</label>
            <input for="Desconto" class="form-control" type="number" min="0" value="0" step=".01"  name="desconto" value="{{ isset($registro->desconto) ? $registro->desconto : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Acrescimo" class="control-label">Acréscimo %</label>
            <input for="Acrescimo" class="form-control" type="number" min="0" value="0" step=".01"  name="acrescimo" value="{{ isset($registro->acrescimo) ? $registro->acrescimo : '' }}" required/>
        </div>
    </div>
</div>