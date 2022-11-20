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

        //$('#val_financiar').attr('min', financiavel);
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
    var valor=document.querySelector('#valor');
    var contador=document.querySelector('#contador');
    var ultimaparcela=document.querySelector('#ultimaparcela');
    var p60 = document.querySelector('#p60');
    var p90 = document.querySelector('#p90');
    var p120 = document.querySelector('#p120');
    var p150 = document.querySelector('#p150');
    var p180 = document.querySelector('#p180');
    var p240 = document.querySelector('#p240');

    var i=1;
//60x
    p60.addEventListener("click", function() {

        for(i;i<=contador.value;i++){
            var parcela=document.querySelector("#parcela"+i);
            parcela.innerHTML="";

       /* var totparcela=parseFloat(valor.value/p60.value);
        var jurosano=document.querySelector('#jurosano'+i);
        var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
        var total=totparcela+=taxa
        var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

            parcela.innerHTML=totMoeda;*/
        }


    });

    //90x
    p90.addEventListener("click", function() {

        for(i;i<=contador.value;i++){
            var parcela=document.querySelector("#parcela"+i);
            parcela.innerHTML="nada";
        var totparcela=parseFloat(valor.value/p90.value);
        var jurosano=document.querySelector('#jurosano'+i);
        var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
        var total=totparcela+=taxa
        var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

           parcela.innerHTML=totMoeda;

        }


    });

    //120x
    p120.addEventListener("click", function() {

        for(i;i<=contador.value;i++){

            var parcela=document.querySelector("#parcela"+i);

        var totparcela=parseFloat(valor.value/p120.value);
        var jurosano=document.querySelector('#jurosano'+i);
        var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
        var total=totparcela+=taxa
        var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });




            parcela.innerText=totMoeda;
            console.log(parcela.innerText=totMoeda);
        }

    });

//150x
p150.addEventListener("click", function() {

    for(i;i<=contador.value;i++){
        var parcela=document.querySelector("#parcela"+i);

    var totparcela=parseFloat(valor.value/p150.value);
    var jurosano=document.querySelector('#jurosano'+i);
    var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
    var total=totparcela+=taxa
    var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });




        parcela.innerHTML=totMoeda;
    }

});
//180x
p180.addEventListener("click", function() {

    for(i;i<=contador.value;i++){

        var parcela=document.querySelector("#parcela"+i);

    var totparcela=parseFloat(valor.value/p180.value);
    var jurosano=document.querySelector('#jurosano'+i);
    var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
    var total=totparcela+=taxa
    var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        parcela.innerHTML=totMoeda;
    }

});

//240x
p240.addEventListener("click", function() {

    for(i;i<=contador.value;i++){
        var parcela=document.querySelector("#parcela"+i);

    var totparcela=parseFloat(valor.value/p240.value);
    var jurosano=document.querySelector('#jurosano'+i);
    var taxa=totparcela*parseFloat(jurosano.innerHTML)/100;
    var total=totparcela+=taxa
    var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        parcela.innerHTML=totMoeda;
    }

});




});
