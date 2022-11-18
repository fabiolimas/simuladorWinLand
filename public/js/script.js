$(document).ready(function(){

        var range=document.querySelector("#val-financiar");

    var resultrange=document.querySelector('#valrange');
    var valorImovel=document.querySelector('#val-imovel');
    valorImovel.addEventListener('change', function(){
           var financiavel=valorImovel.value*45/100;
           var formatoMoeda=financiavel.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
           range.value=financiavel;

           resultrange.innerHTML="45% "+formatoMoeda;
    });
    range.addEventListener('change', function(){
        var valorRange=parseFloat(range.value);
        var valorFormatado = valorRange.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        resultrange.innerHTML= "45% "+valorFormatado;
    });


});
