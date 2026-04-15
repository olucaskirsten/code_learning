const cadastroBtn = document.getElementById("botaoCadastro");
if (cadastroBtn) {
    cadastroBtn.addEventListener("click", function() {
        let email = prompt("Qual seu melhor e-mail?");
        if (email) {
            alert("Obrigado! Seu e-mail cadastrado foi: " + email);
        }
    });
}

const whatsappBtn = document.getElementById("botaoWhatsApp");
if (whatsappBtn) {
    whatsappBtn.addEventListener("click", function() {
        let whatsapp = prompt("Nos informe o seu melhor WhatsApp para negociarmos um carro para o seu evento.");

        if (!whatsapp) {
            alert("Por favor, informe um número de WhatsApp válido.");
            return;
        }

        alert("Obrigado! Logo enviaremos uma mensagem para: " + whatsapp);
    });
}

/* FAZENDO BOTÃO DE NAV PRO MOBILE */

const btn = document.getElementById("btnToggle");
const div = document.getElementById("nav-mobile");

btn.addEventListener("click", () => {
  div.classList.toggle("show");
});