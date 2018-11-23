$(document).ready(function() {
    $('.tabela-pesquisa').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
        }
    }); 
});