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
                    <select for="Promocao" class="form-control js-example-basic-single" name="promocao">
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
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="ID" class="control-label">ID</label>
                                    <input for="ID" class="form-control" type="text" name="id" value="" disabled/>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="Produto" class="control-label">Produto</label>
                                    <input for="Produto" class="form-control" type="text" name="produto" value="" disabled/>
                               </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="ValUnit" class="control-label">Valor Unitário</label>
                                    <input for="ValUnit" class="form-control" type="text" name="valUnit" value="" disabled/>
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
                                    <input for="Quantidade" class="form-control quantidade" type="text" name="quantidade" value="" required/>
                                </div>         
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary btn-md" name="adicionarItem" onclick="adicionaItemPedido()" value="Adicionar"/>
                                </div>         
                            </div>
                        </div>
                    @endif
                    <div class="row panel panel-default">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered" id="linhasVenda">
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
            <input for="TotProd" class="form-control dinheiro" type="text" name="totProd" value="{{ isset($registro->total_produtos) ? $registro->total_produtos : '0,00' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotDesc" class="control-label">Total Descontos</label>
            <input for="TotDesc" class="form-control dinheiro" type="text" name="totDesc" value="{{ isset($registro->total_descontos) ? $registro->total_descontos : '0,00' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotAcresc" class="control-label">Total Acréscimos</label>
            <input for="TotAcresc" class="form-control" type="text" name="totAcresc" value="{{ isset($registro->total_acrescimos) ? $registro->total_acrescimos : '0,00' }}" disabled/>
        </div>
        <div class="col-md-3">
            <label for="TotFinal" class="control-label">Valor Total</label>
            <input for="TotFinal" class="form-control dinheiro" type="text" name="totFinal" value="{{ isset($registro->total_valor) ? $registro->total_valor : '0,00' }}" disabled/>
        </div>
    </div>
</div>

<script language="text/javascript">
    // Função responsável por inserir linhas na tabela
    function adicionaItemPedido() {
        alert('tarammmmm!!');
        // Captura a referência da tabela com id “minhaTabela”
        var table = $('#linhasVenda');
        // Captura a quantidade de linhas já existentes na tabela
        var numOfRows = table.rows.length;
        // Captura a quantidade de colunas da última linha da tabela
        var numOfCols = table.rows[numOfRows-1].cells.length;

        // Insere uma linha no fim da tabela.
        var newRow = table.insertRow(numOfRows);

        var idProduto = $('input[name="id"]').val()
        var descProduto = $('input[name="produto"]').val()
        var qtd = $('input[name="quantidade"]').val()
        var valUnit = $('input[name="valUnit"]').val()

        if((idProduto !== null && idProduto !== '') &&
            (descProduto !== null && descProduto !== '') &&
            (qtd !== null && qtd !== '') &&
            (valUnit !== null && valUnit !== ''))
        {
            // Faz um loop para criar as colunas
            for (var j = 0; j < numOfCols; j++) {
                // Insere uma coluna na nova linha 
                newCell = newRow.insertCell(j);

                switch(j){
                    case 0:
                        newCell.innerHTML = idProduto;
                        break;

                    case 1:
                        newCell.innerHTML = descProduto;
                        break;

                    case 2:
                        newCell.innerHTML = qtd;
                        break;

                    case 3:
                        newCell.innerHTML = valUnit;
                        break;

                    case 4:
                    newCell.innerHTML = '<a onclick="removeItemPedido()"><i class="fa fa-trash fa-lg"></i></a>';
                        break;
                    default:
                        break;
                }
            }
        }
        else{
            alert("Favor informar o produto que será adicionado e a quantidade!");
        }       
    }
</script>