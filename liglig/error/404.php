<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Erro 404 - Página não encontrada</title>
  <script src="../global/auth.js" defer></script>
  <script src="../global/fontes.js" defer></script>
  <script src="../global/darkmode.js" defer></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="left-section">
        <div class="logo">LigLig Cell</div>

        <button id="dark-mode-toggle" aria-label="Alternar modo escuro">
          <i class="fas fa-moon"></i>
        </button>

        <div class="font-controls">
          <button id="diminuir-fonte" aria-label="Diminuir fonte">
            <i class="fas fa-minus"></i>
          </button>
          <button id="aumentar-fonte" aria-label="Aumentar fonte">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>

      <ul class="nav-links">
        <li><a href="../home/index.php">Início</a></li>
        <li><a href="../register/register.php">Registrar</a></li>
        <li><a href="../login/login.php">Entrar</a></li>
      </ul>

      <div id="user-info" style="display: none; gap: 1rem; align-items: center; color: white;">
        <span id="user-name" style="font-weight: bold;"></span>
        <button id="logout-btn">Sair</button>
      </div>
    </nav>
  </header>

  <main class="container"
    style="flex-direction: column; align-items: center; justify-content: center; text-align: center; padding-top: 8rem;">
    <h1 style="font-size: 6rem;">404</h1>
    <p style="color: #5907f0 ; font-size: 1.5rem; margin: 1rem 0;">Oops! Página não encontrada.</p>
    <p style="color: #5907f0;">A página que você está tentando acessar não existe ou foi removida.</p>

    <a href="../home/index.html"
      style="margin-top: 2rem; padding: 0.8rem 1.5rem; background-color: #1469a0; color: white; text-decoration: none; border-radius: 6px;">Voltar
      para a Home</a>
  </main>

  <script src="script.js"></script>
</body>

</html>