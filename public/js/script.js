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

        $('#val_financiar').attr('min', financiavel);
        $('#val_financiar').attr('max', valorImovel.value);

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
/*calculo parcelas*/
$(document).ready(function(){


    var jurosmes=document.querySelector('#jurosmes');
    var jurosano=document.querySelector('#jurosano');
    var valor=document.querySelector('#valor');
    var contador=document.querySelector('#contador');
    var parcela1=document.querySelector('#parcela1');
    var ultimaparcela=document.querySelector('#ultimaparcela');


    var parcela = document.querySelectorAll('input[name="parcelas"]');
    var totparcela=parseFloat((valor.value/parcela.value));
    parcela.addEventListener("click", function() {
        let selectedSize;
        for (const radioButton of parcela) {
            if (radioButton.checked) {
                selectedSize = radioButton.value;
                alert(selectedSize);

            }
        }
    });



});
