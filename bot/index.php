<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4> <img src='img/head-663997_1920.jpg' class='imgRedonda' /> Señor bot </h4>
            </div>

            <div class="body" id="chatbody">
                <p class="alicia">Hola! Soy el Señor bot, Digame cual es su consulta. </p>
                <div class="scroller"></div>
            </div>

            <form class="chat" method="post" autocomplete="off">
                <input type="text" name="chat" id="chat" placeholder="Ingresa tu pregunta" style=" font-family: cursive; font-size: 20px;">
                <input type="submit" value="Enviar" id="btn">
            </form>
        </div>
    </div>
    <script src="app.js"></script>

</body>

</html>