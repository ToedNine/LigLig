document.addEventListener("DOMContentLoaded", () => {
  const formLogin = document.getElementById("formLogin");

  formLogin.addEventListener("submit", (e) => {
    e.preventDefault();

    const login = document.getElementById("login").value.trim();
    const senha = document.getElementById("senha").value.trim();

    if (login.length !== 6 || senha.length !== 8) {
      alert("Login deve ter 6 caracteres e senha 8 caracteres.");
      return;
    }

    const userData = localStorage.getItem(`user_${login}`);

    if (!userData) {
      alert("Usuário não encontrado.");
      return;
    }

    const usuario = JSON.parse(userData);

    if (usuario.senha !== senha) {
      alert("Senha incorreta.");
      return;
    }

    localStorage.setItem("userLoggedIn", login);

    window.location.href = "../home/index.html";
  });

  const loginInput = document.getElementById("login");
  const senhaInput = document.getElementById("senha");

  loginInput.addEventListener("input", () => {
    loginInput.value = loginInput.value.replace(/[^A-Za-z]/g, "").slice(0, 6);
  });

  senhaInput.addEventListener("input", () => {
    senhaInput.value = senhaInput.value.replace(/[^A-Za-z]/g, "").slice(0, 8);
  });
});
