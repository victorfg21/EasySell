$(function() {
    $('.data').mask('00/00/0000');
    $(".cpf").mask("999.999.999-99");
    $('.cnpj').mask('00.000.000/0000-00');
    $(".telFixo").mask("(99) 9999-9999");
    $(".telCel").mask("(99) 9 9999-9999");
    $(".cep").mask("99.999-999");
    $('.peso').mask("#.##0.00" , { reverse:true});
    $('.dinheiro').mask("#.##0.00" , { reverse:true});

    $('.js-example-basic-single').select2();
});