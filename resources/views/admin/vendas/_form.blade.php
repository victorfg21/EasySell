<div class="box panel panel-default">
    <div class="box-body">
        <div class="form-group">
            <label for="Cliente" class="control-label">Cliente</label>
            <select for="Cliente" class="form-control js-example-basic-single" name="cliente" required>
                @foreach ($cliente_list as $item => $nome)
                    @if(isset($registro->Cliente->id))
                        @if ($item == $registro->Cliente->id)
                            <option value="{{ $item }}" selected>{{ $nome }}</option>
                        @else
                            <option value="{{ $item }}">{{ $nome }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Vendedor" class="control-label">Vendedor</label>
            <select for="Vendedor" class="form-control js-example-basic-single" name="vendedor" required>
                @foreach ($vendedor_list as $item => $nome)
                    @if(isset($registro->Vendedor->id))
                        @if ($item == $registro->Vendedor->id)
                            <option value="{{ $item }}" selected>{{ $nome }}</option>
                        @else
                            <option value="{{ $item }}">{{ $nome }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Promocao" class="control-label">Promoção</label>
                    <select for="Promocao" class="form-control js-example-basic-single" name="promocao" required>
                        @foreach ($promocao_list as $item => $descricao)
                            @if(isset($registro->Promocao->id))
                                @if ($item == $registro->Promocao->id)
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
        <div class="panel panel-default">
            <div class="box-header with-border"> 
                <h3 class="box-title">Seleção de Produtos</h3>
            </div>    
            <div class="box-body">
                <div class="col-md-12">
                    @if(!isset($registro->id))
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="ID" class="control-label">ID</label>
                                    <input for="ID" class="form-control" type="text" name="id" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="Produto" class="control-label">Produto</label>
                                    <input for="Produto" class="form-control" type="text" name="produto" value="" disabled/>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CodBarra" class="control-label">Código de Barras</label>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input for="CodBarra" class="form-control cep" type="text" name="cep" value=""/>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-default" id="codigoBarra">Buscar Produto</a>
                                        </div>  
                                    </div>
                                </div>                                        
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Quantidade" class="control-label">Quantidade</label>
                                    <input for="Quantidade" class="form-control" type="text" name="quantidade" value="" required/>
                                </div>         
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-md" name="limparCarrinho">Adicionar</button>
                                </div>         
                            </div>
                        </div>
                    @endif
                    <div class="row panel panel-default">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-xs-1">ID</th>
                                        <th class="col-xs-6">Produto</th>
                                        <th class="col-xs-2">Quantidade</th>
                                        <th class="col-xs-2">Valor Unitário</th>
                                        <th class="col-xs-1">Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>

                                        <td>
                                            Calcinha XY Rosa
                                        </td>

                                        <td>
                                            15
                                        </td>

                                        <td>
                                            R$ 9,89
                                        </td>

                                        <td>
                                            <i class="fa fa-trash fa-lg"></i>
                                        </td>
                                    </tr>                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <button class="btn btn-primary btn-md" name="limparCarrinho">Limpar Carrinho</button> 
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="box-footer">
        <div class="col-md-3">
            <label for="TotProd" class="control-label">Total Produtos</label>
            <input for="TotProd" class="form-control" type="text" name="totProd" value="{{ isset($registro->total_produtos) ? $registro->total_produtos : '' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotDesc" class="control-label">Total Descontos</label>
            <input for="TotDesc" class="form-control" type="text" name="totDesc" value="{{ isset($registro->total_descontos) ? $registro->total_descontos : '' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotAcresc" class="control-label">Total Acréscimos</label>
            <input for="TotAcresc" class="form-control" type="text" name="totAcresc" value="{{ isset($registro->total_acrescimos) ? $registro->total_acrescimos : '' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotFinal" class="control-label">Valor Total</label>
            <input for="TotFinal" class="form-control" type="text" name="totFinal" value="{{ isset($registro->total_valor) ? $registro->total_valor : '' }}" disabled/>
        </div>
    </div>
</div>