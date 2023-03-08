/*Simulador de financiamento*/
$(document).ready(function () {

    var range = document.querySelector("#val_financiar");
    var resultrange = document.querySelector('#valrange');
    var valorImovel = document.querySelector('#val_imovel');
    var porcentagem = document.querySelector('#porcentagem');
    var entrada=document.querySelector('#val_entrada');
    //evento do valor do imovel
    if (valorImovel.value == '') {
       // range.disabled = true;
    }
    //imovel
    valorImovel.addEventListener('keyup', function () {
        var financiavel=parseFloat(valorImovel.value*47)/100;
        var formatoMoeda = financiavel.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
       /* if (valorImovel.value != '') {
            range.disabled = false;
        } else {
            range.disabled = true;

        }*/

        range.value = financiavel;

        $('#val_financiar').attr('min', financiavel);
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

        //$('#val_financiar').attr('min', financiavel);
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
            var totparcela = parseFloat(range.value / p60.value);
            var jurosmes = document.querySelector('#jurosmes' + i);
            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

            parcela.innerHTML = totMoeda;
        }


    });

    //90x
    p90.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);

            var totparcela = parseFloat(range.value / p90.value);

            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

            parcela.innerHTML = totMoeda;

        }


    });

    //120x
    p120.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {

            var parcela = document.querySelector("#parcela" + i);

            var totparcela = parseFloat(range.value / p120.value);
            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });




            parcela.innerText = totMoeda;

        }

    });

    //150x
    p150.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);

            var totparcela = parseFloat(range.value / p150.value);
            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });




            parcela.innerHTML = totMoeda;
        }

    });
    //180x
    p180.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {

            var parcela = document.querySelector("#parcela" + i);

            var totparcela = parseFloat(range.value / p180.value);
            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

            parcela.innerHTML = totMoeda;
        }

    });

    //240x
    p240.addEventListener("click", function () {
        var i = 1;
        for (i; i <= contador.value; i++) {
            var parcela = document.querySelector("#parcela" + i);

            var totparcela = parseFloat(range.value / p240.value);
            var jurosano = document.querySelector('#jurosano' + i);
            var taxa = totparcela * parseFloat(jurosano.innerHTML) / 100;
            var total = totparcela += taxa
            var totMoeda = total.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

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
    var labelresidencial=document.querySelector('.residencial');
    var labelcomercial=document.querySelector('.comercial');
    var labelterreno=document.querySelector('.terreno');
    //residencial
    residencial.addEventListener('click', function () {
        labelresidencial.style.color="red";
        labelcomercial.style.color="#fff";
        labelterreno.style.color="#fff";

       valorTaxa.innerHTML=residencial.value+"% ao ano";
    });

     //comercial
     comercial.addEventListener('click', function () {
        labelresidencial.style.color="#fff";
        labelcomercial.style.color="red";
        labelterreno.style.color="#fff";

       valorTaxa.innerHTML=comercial.value+"% ao ano";
    });

     //terreno
     terreno.addEventListener('click', function () {
        labelresidencial.style.color="#fff";
        labelcomercial.style.color="#fff";
        labelterreno.style.color="red";

       valorTaxa.innerHTML=terreno.value+"% ao ano";
    });

});
