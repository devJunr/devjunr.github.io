<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adriano Jr - Desenvolvedor Full Stack</title>
    <link rel="stylesheet" href="../styles.css?v=1.0">
     <meta name="theme-color" content="#ff0000" />
    <link rel="shortcut icon" href="files/icon.png?v=1.0" type="image/x-icon">
    <meta name="description" content="Desenvolvedor Full Stack freelancer, estudante e entusiasta da programação. Conheça as habilidades e projetos de Adriano Jr.">
    <meta name="author" content="Adriano Júnior">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Adriano Jr - Desenvolvedor Full Stack">
    <meta property="og:description" content="Adriano Jr, um desenvolvedor Full Stack freelancer e estudante entusiasta de programação.">
    <meta property="og:image" content="https://adrianojr.online/files/icon.png?v=1.0">
    <meta property="og:url" content="https://adrianojr.online">
    <meta property="og:type" content="website">
  <style>
    *{
        color: red;
    }
    .english a{
        padding: 15px;
        color: red;
        text-align: center;
        font-size: 15px;
        border: 4px solid #7a04eb;
        margin-bottom: 15px;
        background-color: black;
    }
    .header  {
        color: rgb(255, 0, 0);
    }
        </style>
        
</head>
<body>
    <div class="container">
    <header class="header">
        <h1>ERRO</h1>
        <canvas id="matrixCanvas"></canvas>
    </header>

<div class="english">
    
    <a  href="https://adrianojr.online/">Voltar</a>
    </div>
    
    <script>
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
    
            ctx.fillStyle = "#ff0000"; 
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
</body>
</html>
