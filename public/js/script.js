/*Simulador de financiamento*/
$(document).ready(function () {

    var range = document.querySelector("#val_financiar");
    var resultrange = document.querySelector('#valrange');
    var valorImovel = document.querySelector('#val_imovel');
    var porcentagem = document.querySelector('#porcentagem');
    var entrada=document.querySelector('#val_entrada');
    //evento do valor do imovel
    if (valorImovel.value == '') {
       range.disabled = true;
    }
    //formula

    //imovel
    valorImovel.addEventListener('keyup', function () {
        var financiavel=parseFloat(valorImovel.value*47)/100;
        var formatoMoeda = financiavel.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
       if (valorImovel.value != '') {
            range.disabled = false;
        } else {
            range.disabled = true;

        }

        range.value = financiavel;

        $('#val_financiar').attr('min', 0);
        $('#val_financiar').attr('max', valorImovel.value);

        var percentRange = range.value / valorImovel.value;

        if (valorImovel.value != '') {
            resultrange.innerHTML = percentRange.toFixed(2).replace('.', '') + "% " + formatoMoeda;
        } else {
            resultrange.innerHTML = "";
        }

    });
     //evento de autalização input range
     range.addEventListener('change', function () {
        var valorRange = parseFloat(range.value);
        var percentRange = range.value / valorImovel.value;
        var percentFormatado = percentRange.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

        var valorFormatado = valorRange.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        resultrange.innerHTML = percentRange.toFixed(2).replace('.', '') + "% " + valorFormatado;
    });

    //automovel
    entrada.addEventListener('keyup', function () {
        var financiavel=parseFloat(valorImovel.value-entrada.value);
        var formatoMoeda = financiavel.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
       /* if (valorImovel.value != '') {
            range.disabled = false;
        } else {
            range.disabled = true;

        }*/


        range.value = financiavel;

        $('#val_financiar').attr('min', 0);
        $('#val_financiar').attr('max', valorImovel.value);

        var percentRange = range.value / valorImovel.value;
        if (valorImovel.value != '') {
            resultrange.innerHTML = percentRange.toFixed(2).replace('.', '') + "% " + formatoMoeda;
        } else {
            resultrange.innerHTML = "";
        }

    });


});
/*calculo parcelas*/
$(document).ready(function () {


    var range = document.querySelector("#val_financiar");
    var valor = document.querySelector('#valor');
    var contador = document.querySelector('#contador');
    var ultimaparcela = document.querySelector('#ultimaparcela');
    var p60 = document.querySelector('#p60');
    var p90 = document.querySelector('#p90');
    var p120 = document.querySelector('#p120');
    var p150 = document.querySelector('#p150');
    var p180 = document.querySelector('#p180');
    var p240 = document.querySelector('#p240');


    //60x
    p60.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p60.value));

            var potm=Math.pow(1+taxa, parseFloat(p60.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;



        }


    });

    //90x
    p90.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p90.value));

            var potm=Math.pow(1+taxa, parseFloat(p90.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;


        }


    });

    //120x
    p120.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {

            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p120.value));

            var potm=Math.pow(1+taxa, parseFloat(p120.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;

        }

    });

    //150x
    p150.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p150.value));

            var potm=Math.pow(1+taxa, parseFloat(p150.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;
        }

    });
    //180x
    p180.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {

            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p180.value));

            var potm=Math.pow(1+taxa, parseFloat(p180.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;
        }

    });

    //240x
    p240.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);
            var jurosmes=document.querySelector("#taxames"+i).value;

            var taxa=parseFloat(jurosmes)/100;


            var pot=Math.pow(1+taxa, parseFloat(p240.value));

            var potm=Math.pow(1+taxa, parseFloat(p240.value))-1;
            var valor_parcela=(pot*parseFloat(range.value)*taxa)/potm;

            var totMoeda = valor_parcela.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
            parcela.innerHTML = totMoeda;
        }

    });


    var valorTaxa = document.querySelector('.taxa');
    var residencial = document.querySelector('#residencial');
    residencial.addEventListener('click', function () {

        alert(residencial.value);
    });




});

$(document).ready(function(){

    var valorTaxa = document.querySelector('.taxa');
    var residencial = document.querySelector('#residencial');
    var comercial=document.querySelector('#comercial');
    var terreno=document.querySelector('#terreno');
    var automovel=document.querySelector('#automovel');
    var imovel=document.querySelector('#imovel');

    var labelresidencial=document.querySelector('.residencial');
    var labelcomercial=document.querySelector('.comercial');
    var labelterreno=document.querySelector('.terreno');
    var labelautomovel=document.querySelector('.automovel');
    var labelimovel=document.querySelector('.imovel');
    //residencial
    valorTaxa.innerHTML=residencial.value+"% ao ano";
    residencial.addEventListener('click', function () {
        labelresidencial.style.color="red";
        labelcomercial.style.color="#fff";
        labelterreno.style.color="#fff";
        labelterreno.style.textDecoration="none";
        labelcomercial.style.textDecoration="none";
        labelresidencial.style.textDecoration="underline";

       valorTaxa.innerHTML=residencial.value+"% ao ano";
    });

     //comercial
     comercial.addEventListener('click', function () {
        labelresidencial.style.color="#fff";
        labelcomercial.style.color="red";
        labelterreno.style.color="#fff";
        labelresidencial.style.textDecoration="none";
        labelterreno.style.textDecoration="none";
        labelcomercial.style.textDecoration="underline";

       valorTaxa.innerHTML=comercial.value+"% ao ano";
    });

     //terreno
     terreno.addEventListener('click', function () {
        labelresidencial.style.color="#fff";
        labelcomercial.style.color="#fff";
        labelterreno.style.color="red";
        labelterreno.style.textDecoration="underline"
        labelresidencial.style.textDecoration="none";
        labelcomercial.style.textDecoration="none";


       valorTaxa.innerHTML=terreno.value+"% ao ano";
    });



});
