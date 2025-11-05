document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("dark-mode-toggle");
  const icon = toggle?.querySelector("i");
  const html = document.documentElement;
  const savedMode = localStorage.getItem("dark-mode");
  if (savedMode === "true") {
    html.classList.add("dark");
    icon?.classList.replace("fa-moon", "fa-sun");
  }

  toggle?.addEventListener("click", () => {
    const isDark = html.classList.toggle("dark");
    localStorage.setItem("dark-mode", isDark);
    icon?.classList.toggle("fa-sun", isDark);
    icon?.classList.toggle("fa-moon", !isDark);
  });
});
