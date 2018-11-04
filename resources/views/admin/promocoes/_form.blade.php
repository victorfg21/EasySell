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
            <input for="Inicio" class="form-control" type="date" name="inicio" value="{{ isset($registro->inicio) ? date( 'Y-m-d' , strtotime($registro->inicio)) : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Fim" class="control-label">Fim Promoção</label>
            <input for="Fim" class="form-control" type="date" name="fim" value="{{ isset($registro->fim) ? date( 'Y-m-d' , strtotime($registro->fim)) : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Desconto" class="control-label">Desconto %</label>
            <input for="Desconto" class="form-control dinheiro" type="text" name="desconto" value="{{ isset($registro->desconto) ? $registro->desconto : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Pagamento" class="control-label">Forma de Pagamento</label>
            <select for="Pagamento" class="form-control js-example-basic-single" name="pagamento" required>
                @foreach ($pagamento_list as $item => $descricao)
                    @if(isset($registro->Pagamento->id))
                        @if ($item == $registro->Pagamento->id)
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
            <label for="Categoria" class="control-label">Categoria</label>
            <select for="Categoria" class="form-control js-example-basic-single" name="categoria">
                <option value=""></option>
                @foreach ($categoria_list as $item => $descricao)
                    @if(isset($registro->Categoria->id))
                        @if ($item == $registro->Categoria->id)
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
            <label for="Marca" class="control-label">Marca</label>
            <select for="Marca" class="form-control js-example-basic-single" name="marca">
                <option value=""></option>
                @foreach ($marca_list as $item => $descricao)
                    @if(isset($registro->Marca->id))
                        @if ($item == $registro->Marca->id)
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
            <label for="Modelo" class="control-label">Modelo</label>
            <select for="Modelo" class="form-control js-example-basic-single" name="modelo">
                <option value=""></option>
                @foreach ($modelo_list as $item => $descricao)
                    @if(isset($registro->Modelo->id))
                        @if ($item == $registro->Modelo->id)
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
    </div>
</div>