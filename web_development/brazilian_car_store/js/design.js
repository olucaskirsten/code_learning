/* JS DE SOMBRA NAS IMAGENS */

document.querySelectorAll("img:not(.logo-img)").forEach(img => {
  img.style.boxShadow = "0px 10px 25px rgba(255, 0, 0, 0.4)";
  img.style.borderRadius = "8px";
});

/* EFEITO DIGITAÇÃO TITULO HOME */

const frase = "A GARAGEM DOS SEUS SONHOS COMEÇA AQUI";
let index = 0;
const elemento = document.getElementById("typing");

function digitar() {
  if (index < frase.length) {
    elemento.innerHTML += frase.charAt(index);
    index++;
    setTimeout(digitar, 100);
  }
}

digitar();

/* PULSAR NO BOTÃO HERO DA HOME */

const botao = document.getElementById("botao-hero-home");

botao.style.transition = "0.3s";

setInterval(() => {
  botao.style.transform = "scale(1.1)";
  setTimeout(() => {
    botao.style.transform = "scale(1)";
  }, 300);
}, 1000);


/* PULSAR LEVE - TEXTO FAVORITOS HOME */

const el = document.getElementById("favoritos");

setInterval(() => {
  el.style.transform = "scale(1.01)";
  el.style.transition = "0.8s";
  setTimeout(() => {
    el.style.transform = "scale(1)";
  }, 400);
}, 1000);


