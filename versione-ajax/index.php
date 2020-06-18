<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>AjaxDischi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="src/scss/app.scss">
        <link rel="stylesheet" href="public/style.css">
    </head>
    <body>
        <header>
            <img id="logo" src="img/spotify.png" alt="">
        </header>
        <div class="sfondo">
            <main>

                <script id="entry-template" type="text/x-handlebars-template">
                    <div class="scheda">
                        <div class="contenitore-copertina">
                            <img class="img-poster" src="{{copertina}}">
                        </div>
                        <p class="titolo">
                            {{titolo}}
                        </p>
                        <p class="autore">
                            {{autore}}
                        </p>
                        <p class="genere">
                            {{genere}}
                        </p>
                        <p class="anno">
                            {{anno}}
                        </p>
                    </div>
                </script>

            </main>
        </div>

        <script src="src/js/app.js" charset="utf-8"></script>
        <script src="public/main.js" charset="utf-8"></script>
    </body>
</html>
