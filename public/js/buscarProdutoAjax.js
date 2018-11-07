$(document).ready(function(){
    $('#btnGetProduto').on('click',function(e){

        var codProduto = parseInt($('input[name="codBarra"]').val());

        $.getJSON('produto/' + codProduto, function(produto){
            
            if(produto["id"] == null || produto === '')
            {
                $('input[name="idProduto"]').val("");
                $('input[name="descProduto"]').val("");
                $('input[name="valUnitProduto"]').val("");
                swal("Ops!", produto["error"], "error");
            }
            else
            {
                $('input[name="idProduto"]').val(produto["id"]);
                $('input[name="descProduto"]').val(produto["descricao"]);
                $('input[name="valUnitProduto"]').val(produto["valor"]);
            }
        });
    });
});