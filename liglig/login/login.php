<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Entrar</title>
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

  <main>
    <h1>Entrar</h1>

    <section class="container">
      <img src="../imgs/liglig.jpeg" alt="Logo da Loja" class="logo-img" />
      <div class="form-wrapper">
        <a href="../register/register.php" class="primeiro-acesso">Primeiro Acesso</a>
        <form id="formLogin" class="form">
          <div class="form">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" placeholder="6 caracteres alfabéticos" required minlength="6"
              maxlength="6" />
          </div>

          <div class="form">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="8 caracteres alfabéticos" required minlength="8"
              maxlength="8" />
          </div>

          <div class="form buttons">
            <button type="submit">Entrar</button>
            <button type="reset">Limpar Tela</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer-container">

      <div class="footer-section">
        <h3>LigLig Cell</h3>
        <p>Assistência técnica e venda de celulares, acessórios e eletrônicos.</p>
      </div>

      <div class="footer-section">
        <h4>Contato</h4>
        <p><i class="fas fa-phone"></i> (21) 99999-9999</p>
        <p><i class="fas fa-envelope"></i> contato@ligligcell.com</p>
        <p><i class="fas fa-map-marker-alt"></i> Rua dos Estampadores, 201 - Rio de Janeiro/RJ</p>
      </div>

      <div class="footer-section">
        <h4>Redes Sociais</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 LigLig Cell — Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="login.js"></script>
</body>

</html>