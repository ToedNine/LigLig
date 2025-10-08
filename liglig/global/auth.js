document.addEventListener("DOMContentLoaded", () => {
  const userInfo = document.getElementById("user-info");
  const userNameSpan = document.getElementById("user-name");
  const logoutBtn = document.getElementById("logout-btn");

  const loginAtual = localStorage.getItem("userLoggedIn");

  if (loginAtual && userInfo && userNameSpan) {
    const user = JSON.parse(localStorage.getItem(`user_${loginAtual}`));
    if (user) {
      userInfo.style.display = "flex";
      userNameSpan.textContent = `Bem-vindo, ${user.login}`;
    }
  }

  if (logoutBtn) {
    logoutBtn.addEventListener("click", () => {
      localStorage.removeItem("userLoggedIn");
      location.reload();
    });
  }
});re
