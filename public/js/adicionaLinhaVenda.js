$(document).ready(function () {
    $('#btnSetItem').on('click', function (e) {
        // Captura a referência da tabela com id “minhaTabela”
        var table = $('#linhasVenda')[0];
        // Captura a quantidade de linhas já existentes na tabela
        var numOfRows = table.tBodies[0].rows.length;
        var numOfRowsHead = table.tHead.rows.length;
        // Captura a quantidade de colunas da última linha da tabela
        var numOfCols = table.tHead.rows[numOfRowsHead - 1].cells.length;       

        var idProduto = $('input[name="idProduto"]').val();
        var descProduto = $('input[name="descProduto"]').val();
        var qtd = $('input[name="qtdProduto"]').val();
        var valUnit = $('input[name="valUnitProduto"]').val();

        if ((idProduto !== null && idProduto !== '') &&
            (descProduto !== null && descProduto !== '') &&
            (qtd !== null && qtd !== '') &&
            (valUnit !== null && valUnit !== '')) {
            //Verifica se a lista ja possui o item adicionado
            for (var i = 0; i < numOfRows; i++) {
                if (idProduto == table.tBodies[0].rows[i].cells[0].innerHTML) {
                    swal("Ops!", 'Esse produto já foi adicionado! \nRemova-o antes de inserir novamente', "error");
                    return;
                }
            }

            // Insere uma linha no fim da tabela.
            var newRow = table.tBodies[0].insertRow(numOfRows);

            // Faz um loop para criar as colunas
            for (var j = 0; j < numOfCols; j++) {
                // Insere uma coluna na nova linha 
                newCell = newRow.insertCell(j);

                switch (j) {
                    case 0:
                        newCell.innerHTML = idProduto;
                        break;

                    case 1:
                        newCell.innerHTML = descProduto;
                        break;

                    case 2:
                        newCell.innerHTML = '<input class="form-control quantidade" type="text" value="' + qtd + '" required/>';
                        $('.quantidade').mask("#.##0" , { reverse:true});
                        break;

                    case 3:
                        newCell.innerHTML = valUnit;
                        break;

                    case 4:
                        newCell.innerHTML = '<a class="btnDelLinha"><i class="fa fa-trash fa-lg"></i></a>';
                        break;
                    default:
                        break;
                }
            }

            var totProduto = parseFloat($('input[name="totProd"]').val()) + (parseFloat(valUnit) * parseFloat(qtd));
            $('input[name="totProd"]').val(totProduto);

        } else {
            swal("Ops!", "A quantidade para o item não foi informada", "error");
        }
    });

    $('#btnDelPedido').on('click', function (e) {
        // Captura a referência da tabela com id “minhaTabela”
        var table = $('#linhasVenda')[0];
        // Captura a quantidade de linhas já existentes na tabela
        var numOfRows = table.tBodies[0].rows.length;
        // Faz um loop para remover as linhas
        while (numOfRows > 0) {
            table.tBodies[0].deleteRow(0);
            numOfRows = table.tBodies[0].rows.length;
        }

        var totProduto = $('input[name="totProd"]').val('0,00');
    });

    $(document).on('click', '.btnDelLinha', function (e) {
        // Captura a referência da tabela com id “minhaTabela”
        var table = $('#linhasVenda')[0];
        //Id da linha que será removida
        var idLinha = e.currentTarget.parentElement.parentElement.sectionRowIndex;
        // Remove a linha
        table.tBodies[0].deleteRow(idLinha);
    });
});