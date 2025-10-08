document.addEventListener("DOMContentLoaded", () => {
  const aumentarBtn = document.getElementById("aumentar-fonte");
  const diminuirBtn = document.getElementById("diminuir-fonte");
  const root = document.documentElement;

  const defaultFontSize = 16;
  let currentSize = parseInt(localStorage.getItem("font-size")) || defaultFontSize;

  root.style.fontSize = currentSize + "px";

  function atualizarFonte(novoTamanho) {
    currentSize = Math.max(12, Math.min(24, novoTamanho));
    root.style.fontSize = currentSize + "px";
    localStorage.setItem("font-size", currentSize);
  }

  aumentarBtn?.addEventListener("click", () => atualizarFonte(currentSize + 1));
  diminuirBtn?.addEventListener("click", () => atualizarFonte(currentSize - 1));
});