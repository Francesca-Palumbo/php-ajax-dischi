<!-- includo il file dove sono contenuti i dischi -->
<?php  require 'array_dischi/array.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>AjaxDischi</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <img id="logo" src="img/spotify.png" alt="">
        </header>
        <div class="sfondo">
            <main>
                <?php foreach ($dischi as $disco) { ?>
                    <div class="scheda">
                        <div class="contenitore-copertina">
                            <img class="img-poster" src="<?php echo $disco['poster'] ?>">
                        </div>
                        <p class="titolo">
                            <?php echo $disco['title'] ?>
                        </p>
                        <p class="autore">
                            <?php echo $disco['author'] ?>
                        </p>
                        <p class="genere">
                            <?php echo $disco['genre'] ?>
                        </p>
                        <p class="anno">
                            <?php echo $disco['year'] ?>
                        </p>
                    </div>
                <?php
                }
                ?>
            </main>
        </div>
    </body>
</html>
