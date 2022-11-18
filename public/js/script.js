/*Simulador de financiamento*/
$(document).ready(function () {

    var range = document.querySelector("#val_financiar");
    var resultrange = document.querySelector('#valrange');
    var valorImovel = document.querySelector('#val_imovel');
    var porcentagem = document.querySelector('#porcentagem');
    //evento do valor do imovel
    valorImovel.addEventListener('change', function () {
        var financiavel = valorImovel.value * 45 / 100;
        var formatoMoeda = financiavel.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        range.value = financiavel;

        $('#val-financiar').attr('min', financiavel);
        $('#val-financiar').attr('max', valorImovel.value);

        var percentRange = range.value / valorImovel.value;
        resultrange.innerHTML = percentRange.toFixed(2).replace('.', '') + "% " + formatoMoeda;
    });
    //evento de autalização input range
    range.addEventListener('change', function () {
        var valorRange = parseFloat(range.value);
        var percentRange = range.value / valorImovel.value;
        var percentFormatado = percentRange.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        var valorFormatado = valorRange.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        resultrange.innerHTML = percentRange.toFixed(2).replace('.', '') + "% " + valorFormatado;
    });


});
