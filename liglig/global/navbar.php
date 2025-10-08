<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

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

      <?php if (!isset($_SESSION['usuario'])): ?>
        <li><a href="../register/register.php">Registrar</a></li>
        <li><a href="../login/login.php">Entrar</a></li>
      <?php else: ?>
        <li>
          <span style="color: #fff; font-weight: bold;">
            Olá, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!
          </span>
        </li>
        <li><a href="../global/logout.php" style="color: #ffcc00;">Sair</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>