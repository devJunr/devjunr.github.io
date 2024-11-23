<?php 
include 'web_config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <section class="about-me">
        <h2 id="sobre-mim">Sobre Mim</h2>
        <p id="sobre-mim-texto">Estou cursando analise e desenvolvimento de sistemas, e tentando aprender como autodidata na construção de sites e aplicações web. Exploro tecnologias como Python, APIs, SSH, java, linux.</p>
    </section>

    <section class="skills">
        <h2 id="tecnologias">Tecnologias</h2>
        <h3 id="tecnologias-mais-usadas">Tecnologias mais usadas</h3>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Python</li>
            <li>Linux</li>
            <li>Debian</li>
            <li>Java</li>
        </ul>
        
        <h2 id="ferramentas">Ferramentas</h2>
        <ul>
            <li>VSCode</li>
            <li>GIT</li>
            <li>Netbeans</li>
            <li>GitHub</li>
            <li>FileZilla</li>
            <li>GNU/Linux</li>
        </ul>
        
        <h2 id="formacoes">Formações</h2>
        <ul>
        <li id="formacoes-1">Administração servidor VPS debian</li>
        <li id="formacoes-2">Editor GNU nano </li>
        <li id="formacoes-3"> Vagrant para Iniciantes </li>
        <li id="formacoes-4"> Linux Bash </li>
        <li id="formacoes-5"> Conexão FTP e derivados </li>
        <li id="formacoes-6"> Git e Github Para Iniciantes <li>
        </ul>
    </section> 
</div>
</body>

<!-- Zona de tradução da página -->

<script>
    function idiomaPortugues(){
        document.getElementById('sobre-mim').innerHTML = 'Sobre Mim';
        document.getElementById('sobre-mim-texto').innerHTML = 'Estou cursando analise e desenvolvimento de sistemas, e tentando aprender como autodidata na construção de sites e aplicações web. Exploro tecnologias como Python, APIs, SSH, java, linux.';
        document.getElementById('tecnologias').innerHTML = 'Tecnologias';
        document.getElementById('tecnologias-mais-usadas').innerHTML = 'tecnologias Mais Usadas';
        document.getElementById('ferramentas').innerHTML = 'ferramentas';
        document.getElementById('formacoes').innerHTML = 'Formações';
        document.getElementById('formacoes-1').innerHTML = 'Administração servidor VPS debian'
        document.getElementById('formacoes-2').innerHTML = 'Editor GNU nano'
        document.getElementById('formacoes-3').innerHTML = 'Vagrant para Iniciantes'
        document.getElementById('formacoes-4').innerHTML = 'Linux Bash'
        document.getElementById('formacoes-5').innerHTML = 'Conexão FTP e derivados'
        document.getElementById('formacoes-6').innerHTML = 'Git e Github Para Iniciantes'
    }

    function idiomaIngles(){
        document.getElementById('sobre-mim').innerHTML = 'About Me';
        document.getElementById('sobre-mim-texto').innerHTML = 'Hello! Welcome to my profile. Im studying Full Stack development and trying to work as a freelancer in the construction of websites and web applications. I explore technologies like Python, APIs, SSH, and study on my own accord.';
        document.getElementById('tecnologias').innerHTML = 'Technologies';
        document.getElementById('tecnologias-mais-usadas').innerHTML = 'Most used technologies';
        document.getElementById('ferramentas').innerHTML = 'Tools';
        document.getElementById('formacoes').innerHTML = 'Training';
        document.getElementById('formacoes-1').innerHTML = 'Debian VPS server administration'
        document.getElementById('formacoes-2').innerHTML = 'GNU nano editor'
        document.getElementById('formacoes-3').innerHTML = 'Vagrant for Beginners'
        document.getElementById('formacoes-4').innerHTML = 'Linux Bash'
        document.getElementById('formacoes-5').innerHTML = 'FTP connection and results'
        document.getElementById('formacoes-6').innerHTML = 'Git and GitHub for Beginners'
        
    }
</script>
</html>
