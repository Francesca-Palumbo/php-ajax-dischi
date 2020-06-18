$(document).ready(function(){

    var source   = document.getElementById("entry-template").innerHTML;
    var template = Handlebars.compile(source);

    $.ajax({
        'url' :'array_dischi/array.php',
        'method' : 'GET' ,
        'success' : function(data){
            for (var i = 0; i < data.length; i++) {
                var disco = data[i];
                // console.log(disco);
                var poster = disco.poster;
                var genere = disco.genre;
                var autore = disco.author;
                var titolo = disco.title;
                var anno = disco.year;

            }
        },
        'error' :function(){
            alert('si è verificato un errore');
        }
    });
});
