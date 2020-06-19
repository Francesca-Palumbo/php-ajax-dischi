$(document).ready(function(){

    // creo le variabili che andranno a compilare le card sul file .php
    // partendo dall'oggetto creato con la chiamata ajax
    var source   = document.getElementById("entry-template").innerHTML;
    var template = Handlebars.compile(source);

    $.ajax({
        'url' :'array_dischi/array.php',
        'method' : 'GET' ,
        'success' : function(data){
            // MODO 2 per usare handlebars
            // var template = Handlebars.compile($('#entry-template').html());
            for (var i = 0; i < data.length; i++) {
                var disco = data[i];
                // console.log(disco);
                var dati_disco = {
                    'copertina' : disco.poster,
                    'genere' : disco.genre,
                    'autore' : disco.author,
                    'titolo' : disco.title,
                    'anno' : disco.year
                }
                // var html_card = template(dati_disco);
                // $('#lista-dischi').append(html_card);
            }
        },
        'error' :function(){
            alert('si è verificato un errore');
        }
    });
});
