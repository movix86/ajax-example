<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script type="text/javascript" src="ajax.js"></script>
</head>
<body>
    <h4>Escribe: Ruben, Sandra o Andres</h4>
    <hr>
    <!--<button onclick="ejecutarAJAX()">Haz Click Aqui</button>-->
    <input type="text" id="letras1" name="letras1" onkeyup="ejecutarAJAX(this.value)">
    <button onclick="ejecutarAJAX()">Haz Click Aqui</button>
    <hr>
    <div id="info"></div>
</body>
</html>