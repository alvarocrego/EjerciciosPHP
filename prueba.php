<?php
session_start();

if (!isset($_SESSION["bgcol"])) {
    $_SESSION["bgcol"] = 0;
}

if (!isset($_SESSION["textCol"])) {
    $_SESSION["textCol"] = 0;
}

if (isset($_REQUEST["enviar"])) {
    $bgCol = traduce($_REQUEST["nbgCol"]);
    $textCol = traduce($_REQUEST["ntextCol"]);
    $_SESSION["bgCol"] = $bgCol;
    $_SESSION["textCol"] = $textCol;
    print "<html>\n<head>\n<title>Elección de colores</title>\n</head>\n";
    print("<body bgcolor=\"$bgCol\" text=\"$textCol\">");
} else {
    print "<html>\n<head>\n<title>Elección de colores</title>\n</head>\n<body>";
}

function traduce($color) {
    switch ($color) {
        case "rojo" : return "red";
        case "verde" : return "green";
        case "azul" : return "blue";
        case "cian" : return "cyan";
        case "amarillo" : return "yellow";
        case "rosa" : return "pink";
    }
}
?>
<h2>Elige los tus colores favoritos</h2>
<form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">
    <p>Color de fondo:
        <select name="nbgCol">
            <option>rojo</option>
            <option>verde</option>
            <option>azul</option>
            <option>cian</option>
            <option>amarillo</option>
            <option>rosa</option>
        </select></p>
    <hr />

    <p>Color del texto:
        <select name="ntextCol">
            <option>rojo</option>
            <option>verde</option>
            <option>azul</option>
            <option>cian</option>
            <option>amarillo</option>
            <option>rosa</option>
        </select></p>
    <p><input type="submit" name="enviar" /></p>
</form>
</body>
</html>