<div class="box box-solid box-primary">
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
            <select for="Condicao" class="form-control js-example-basic-single" name="condicao" required>
                @foreach ($condicao_list as $item => $descricao)
                    @if(isset($registro->Condicao->id))
                        @if ($item == $registro->Condicao->id)
                            <option value="{{ $item }}" selected>{{ $descricao }}</option>
                        @else
                            <option value="{{ $item }}">{{ $descricao }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $descricao }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Desconto" class="control-label">Desconto %</label>
            <input for="Desconto" class="form-control dinheiro" type="text" name="desconto" value="{{ isset($registro->desconto) ? $registro->desconto : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Acrescimo" class="control-label">Acréscimo %</label>
            <input for="Acrescimo" class="form-control dinheiro" type="text" name="acrescimo" value="{{ isset($registro->acrescimo) ? $registro->acrescimo : '' }}" required/>
        </div>
    </div>
</div>