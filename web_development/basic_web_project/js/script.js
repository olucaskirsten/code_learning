/* CONFIGURAÇÃO DE LOGIN E SENHA - FORMULÁRIO*/
const NOME_CORRETO = "lucas";
const DATA_NASC_CORRETA = "02/04/2002";

document.addEventListener("DOMContentLoaded", () => {

    const btnLogar = document.getElementById("btnLogar");
    const mensagemLogin = document.getElementById("mensagemLogin");

    btnLogar.addEventListener("click", () => {
        const usuario = document.getElementById("usuario").value.trim();
        const senha = document.getElementById("senha").value.trim();

        let mensagem;

        if (
            usuario.toLowerCase() === NOME_CORRETO.toLowerCase() &&
            senha === DATA_NASC_CORRETA
        ) {
            mensagem = `Login realizado com sucesso! Bem-vindo(a), ${usuario}.`;
            mensagemLogin.classList.remove("erro");
            mensagemLogin.classList.add("sucesso");
        } else {
            mensagem = "Erro no login. Verifique usuário e data de nascimento.";
            mensagemLogin.classList.remove("sucesso");
            mensagemLogin.classList.add("erro");
        }

        mensagemLogin.textContent = mensagem;

        alert(mensagem);

        console.log(mensagem);
    });

    /* BOTÃO DE EXIBIR DADOS */
    const btnExibirDados = document.getElementById("btnExibirDados");
    const listaItens = document.getElementById("lista-itens");
    let dadosJaExibidos = false;

    btnExibirDados.addEventListener("click", () => {
        if (dadosJaExibidos) return;

        const novosItens = [
            "CNPJ Aberto desde 2021;",
            "Estudei 'idiomas' fora do Brasil;",
            "Certificado pelo Massachusetts Institute of Technology (MIT - Online) em Cursos de Desenvolvimento Web e Web Design;",
            "Certificado pela New York University (NYU - Online) em Cursos de Desenvolvimento de Projetos com ênfase em Marketing e Administração;",
            "Estudante de Análise e DEV de Sistemas na Universidade Positivo."
        ];

        novosItens.forEach(texto => {
            const li = document.createElement("li");
            li.textContent = texto;
            listaItens.appendChild(li);
        });

        dadosJaExibidos = true;
    });

    /* JS DO "MODO DE CORES" NO RODAPÉ */
    const btnModoCores = document.getElementById("btnModoCores");

    btnModoCores.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            btnModoCores.textContent = "Modo Light";
        } else {
            btnModoCores.textContent = "Modo Dark";
        }
    });
});
