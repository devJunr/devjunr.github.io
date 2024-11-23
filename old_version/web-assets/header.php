<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6, user-scalable=no">
    <title>Adriano Jr - Desenvolvedor Full Stack</title>
    <link rel="stylesheet" href="./styles.css">
    <meta name="theme-color" content="#06e606" />

</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Adriano Jr</h1>
            <canvas id="matrixCanvas"></canvas>
        </header>
        

<div class="english">
    <button onclick="idiomaPortugues()">🇧🇷</button> <!-- Muda o idioma para português-->
    <button onclick="idiomaIngles()">🇬🇧</button> <!-- Muda o idioma para inglês -->
    
</div>
</body>

<script> // Cria o detalhe do header, com letras passando no fundo
    var c = document.getElementById("matrixCanvas");
    var ctx = c.getContext("2d");

    // making the canvas full screen
    c.height = window.innerHeight;
    c.width = window.innerWidth;

    // characters
    var matrix = "ABCDEFGHIJDKLMNOPQRSTUVWXYZ@#$%&";
    matrix = matrix.split("");

    var font_size = 10;
    var columns = c.width/font_size; 
    var drops = [];

    for(var x = 0; x < columns; x++)
        drops[x] = 1; 

    function drawMatrix() {
        ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
        ctx.fillRect(0, 0, c.width, c.height);

        ctx.fillStyle = "#0f0"; 
        ctx.font = font_size + "px arial";
        for(var i = 0; i < drops.length; i++) {
            var text = matrix[Math.floor(Math.random()*matrix.length)];
            ctx.fillText(text, i*font_size, drops[i]*font_size);

            if(drops[i]*font_size > c.height && Math.random() > 0.975)
                drops[i] = 0;

            drops[i]++;
        }
    }

    setInterval(drawMatrix, 33);
</script>

</html>
