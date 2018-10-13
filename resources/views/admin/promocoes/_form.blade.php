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
            <label for="Inicio" class="control-label">Ínicio Promoção</label>
            <input for="Inicio" class="form-control" type="date" name="inicio" value="{{ isset($registro->inicio) ? $registro->inicio : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Fim" class="control-label">Fim Promoção</label>
            <input for="Fim" class="form-control" type="date" name="fim" value="{{ isset($registro->fim) ? $registro->fim : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Desconto" class="control-label">Desconto %</label>
            <input for="Desconto" class="form-control" type="number" name="desconto" value="{{ isset($registro->tipo) ? $registro->tipo : '' }}" required/>
        </div>
    </div>
</div>