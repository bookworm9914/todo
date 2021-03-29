<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Kovács Anett</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <script src="feldolgoz.js" type="text/javascript"></script>
    </head>
    <body>
        <header><h1>Teendők</h1></header>
        <main>
            <section>
                <form class="urlap">
                    <label for="cim" id="cim">TODO lista</label><br>
                    <input type="text" id="esemeny" name="esemeny">
                    <input type="date" id="datum" name="datum">
                    <input type="submit" value="Add"><br>                     
                </form>        

            </section>
            <article>
                <div id="legordulo"></div>
                <div id="lista"></div>  
            </article>
        </main>
        <footer>Kovács Anett</footer>
    </body>
</html>
