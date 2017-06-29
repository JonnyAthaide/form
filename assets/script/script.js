$(function() {

    var cpf_cnpj = $("input[name='cfp_cnpj']");
    var tamanho = cpf_cnpj.val().length;

    cpf_cnpj.keyup(function() {
        var contador = cpf_cnpj.val().length;
        $("#cont").css("background-color", "#fca").text(contador);
    });

    //focus Out
    $("input[name='cfp_cnpj']").focusout(function() {

        if (tamanho == 15) {
            $(this).mask("99.999.999/9999-99");
            $(this).css("border-color", "none");
        } else if (tamanho == 11) {
            $("input[name='cfp_cnpj']").mask("999.999.999-99");
            $(this).css("border-color", "none");
        } else {
            $(this).css("border-color", "red");
            $(this).val('');
        }
    });











});