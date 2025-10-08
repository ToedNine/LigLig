<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - LigLig Cell</title>
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
        <li><a href="../products/products.php">Produtos</a></li>
      </ul>

      <button id="menu-toggle" class="menu-toggle" style="display:none;">
        <i class="fas fa-bars"></i>
      </button>

      <aside id="sidebar" class="sidebar">
        <div class="sidebar-header">
          <h2>Olá, <span id="user-name"></span> 👋</h2>
          <button id="close-sidebar"><i class="fas fa-times"></i></button>
        </div>
        <ul class="sidebar-links">
          <li><a href="../home/index.php"><i class="fas fa-home"></i> Início</a></li>
          <li><a href="../perfil/perfil.php"><i class="fas fa-user"></i> Meu Perfil</a></li>
          <li><a href="../pedidos/pedidos.php"><i class="fas fa-box"></i> Meus Pedidos</a></li>
          <li><a href="../carrinho/carrinho.php"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
        </ul>
        <button id="logout-btn" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Sair</button>
      </aside>
    </nav>
  </header>

  <main>
    <section class="intro-video">
      <video autoplay muted loop playsinline>
        <source src="../mp4/iPhone 14 Pro Apple.mp4" type="video/mp4">
      </video>
      <div class="video-texto">
        <h1>Iphone 14 Pro Barato?</h1>
        <p>Apenas na LigLig Cell</p>
      </div>
    </section>
  </main>
  <section class="container">
    <img src="../imgs/liglig.jpeg" alt="Logo da Loja" class="logo-img" />
  </section>


</body>

</html>