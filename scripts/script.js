const email = "teste@teste.teste"

function irInicio(){
    let botoes = document.getElementById('funcao_selecionar_linguagens');
    botoes.style.display = 'block';
    let sobre = document.getElementById('texto_paragrafo_conteudo');
    sobre.innerHTML = `Esse site tem como funçao, guardar alguns testes feitos com diferentes linguagens, para que possa ser usada por outras pessoas futuramente, ou poder auxiliair os novos programadores`;
}

function irSobre(){
    let botoes = document.getElementById('funcao_selecionar_linguagens');
    botoes.style.display = 'none';
    
    let sobre = document.getElementById('texto_paragrafo_conteudo');
    sobre.innerHTML = `Embora este seja um site pessoal onde exploro novas tecnologias, meu objetivo é oferecer algo valioso tanto para programadores iniciantes quanto para aqueles que já estão em atividade. Em razão disso, adiciono desafios que crio pessoalmente, reconhecendo que o processo de ensinar é crucial para a fixação dos conhecimentos recém-adquiridos. Além de servir como um recurso para novos programadores, esta página também visa fornecer orientações e desafios que são essenciais para o desenvolvimento contínuo desses profissionais. Os desafios são cuidadosamente elaborados e adicionados manualmente, um por um, para assegurar uma curadoria adequada e relevante. Se você desejar colaborar com novos desafios, sinta-se à vontade para enviá-los para: ${email}`;
}

function redirecionarPgithubTopic(){
    window.location.replace("https://github.com/stars/devJunr/topics?filter=topics");
}