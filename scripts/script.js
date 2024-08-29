const email = "cont@adrianojr.online"

function irInicio(){
        let botoes = document.getElementById('funcao_selecionar_linguagens');

    if (window.innerWidth <= 1000) { // Considerando 768px como limite para mobile
        botoes.style.display = 'block'; // Para mobile
    } else {
        botoes.style.display = 'flex'; // Para PC
    }
    let sobre = document.getElementById('texto_paragrafo_conteudo');
    sobre.innerHTML = `Este site tem como finalidade armazenar uma variedade de testes realizados em diferentes linguagens de programação, visando proporcionar um recurso valioso para futuros usuários. Além disso, busca-se oferecer suporte e orientação a novos programadores, facilitando seu aprendizado e desenvolvimento.`;
    sobre.style.margin = "3.125rem";
}

function irSobre(){
    let botoes = document.getElementById('funcao_selecionar_linguagens');
    botoes.style.display = 'none';
    let sobre = document.getElementById('texto_paragrafo_conteudo');
    sobre.innerHTML = `Embora este seja um site pessoal onde exploro novas tecnologias, meu objetivo é oferecer algo valioso tanto para programadores iniciantes quanto para aqueles que já estão em atividade. Em razão disso, adiciono desafios que crio pessoalmente, reconhecendo que o processo de ensinar é crucial para a fixação dos conhecimentos recém-adquiridos. Além de servir como um recurso para novos programadores, esta página também visa fornecer orientações e desafios que são essenciais para o desenvolvimento contínuo desses profissionais. Os desafios são cuidadosamente elaborados e adicionados manualmente, um por um, para assegurar uma curadoria adequada e relevante. Se você desejar colaborar com novos desafios ou ideias para implementar, sinta-se à vontade para enviá-los para: ${email}`;
    sobre.style.margin = "1.4rem";
}

function redirecionarPgithubTopic(){
    window.location.replace("https://github.com/stars/devJunr/topics?filter=topics");
}