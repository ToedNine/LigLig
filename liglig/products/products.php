<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - LigLig Cell</title>
  <script src="../global/auth.js" defer></script>
  <script src="../global/fontes.js" defer></script>
  <script src="../global/darkmode.js" defer></script>
  <link rel="stylesheet" href="products.css" />
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

  <div class="categoria">
    <h3>Celulares</h3>
    <div class="produtos">
      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/celulares/iphone14pro.jpg" alt="iPhone 14 Pro" />
        </div>
        <div class="info">
          <p class="nome">iPhone 14 Pro</p>
          <p class="descricao">Apple iPhone 14 Pro (128 GB) - Preto-espacial</p>
          <p class="preco">R$ 2.999,98</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/celulares/s24 ultra.png" alt="Samsung Galaxy S24 Ultra" />
        </div>
        <div class="info">
          <p class="nome">Samsung Galaxy S24 Ultra</p>
          <p class="descricao">Smartphone Samsung Galaxy S24 Ultra, Galaxy AI, Selfie de 12MP, Tela de 6.8" 1-120Hz,
            256GB, 12GB RAM - Titânio Preto</p>
          <p class="preco">R$ 4.899,10</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/celulares/edge50.png" alt="Motorola Edge 50 Fusion" />
        </div>
        <div class="info">
          <p class="nome">Motorola Edge 50 Fusion</p>
          <p class="descricao">Smartphone Motorola Edge 50 Fusion 5G - 256GB 8GB RAM + 8GB RAM Boost 50MP Sony AI
            Camera IP68 NFC Pink - Vegan Suede</p>
          <p class="preco">R$ 2.000,90</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/celulares/pocox7.png" alt="POCO X7 Pro" />
        </div>
        <div class="info">
          <p class="nome">POCO X7 Pro</p>
          <p class="descricao">Xiaomi POCO X7 Pro NFC Dual SIM 512GB 12GB RAM de 6.67" 50+8MP 20MP - Preto (Global)
          </p>
          <p class="preco">R$ 2.499,90</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/celulares/honorx7.png" alt="Honor X7" />
        </div>
        <div class="info">
          <p class="nome">Honor X7</p>
          <p class="descricao">Smartphone X7b Silver 256gb 8gb Bateria 6000mAh - Honor - Honor/Huawei</p>
          <p class="preco">R$ 1.499,20</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

    </div>
  </div>

  <div class="categoria">
    <h3>Capas e Peliculas</h3>
    <div class="produtos">
      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/capas/Antichoque.png" alt="Antichoque" />
        </div>
        <div class="info">
          <p class="nome">Antichoque</p>
          <p class="descricao">Capa Bumper - Silicone</p>
          <p class="preco">R$ 14,98</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/capas/iphone15.png" alt="GSHIELD" />
        </div>
        <div class="info">
          <p class="nome">GSHIELD Iphone 15 Pro Max</p>
          <p class="descricao">Capa Para iPhone 15 Pro Max - Dual Shock Sense Preta - Gshield</p>
          <p class="preco">40,99</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/capas/Bundle.png" alt="Bundle" />
        </div>
        <div class="info">
          <p class="nome">Bundle</p>
          <p class="descricao">4 Capas a sua escolha de Iphone 14</p>
          <p class="preco">R$ 29,90</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/capas/privacy.png" alt="Privacidade" />
        </div>
        <div class="info">
          <p class="nome">Privacidade</p>
          <p class="descricao">Anti fofoqueiro</p>
          <p class="preco">R$ 15,90</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="produto">
        <div class="produto-img">
          <img src="../imgs/capas/3d.png" alt="3d" />
        </div>
        <div class="info">
          <p class="nome">Pelicula 3D</p>
          <p class="descricao">Anti as quedas mais potentes</p>
          <p class="preco">R$ 13,90</p>
          <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
        </div>
      </div>

      <div class="categoria">
        <h3>Suportes</h3>
        <div class="produtos">
          <div class="produto">
            <div class="produto-img">
              <img src="../imgs/suporte/Veicular.png" alt="Veicular" />
            </div>
            <div class="info">
              <p class="nome">Suporte Veicular</p>
              <p class="descricao">Suporte automotivo, com trava e GPS - Exborn</p>
              <p class="preco">R$ 16,98</p>
              <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
            </div>
          </div>

          <div class="produto">
            <div class="produto-img">
              <img src="../imgs/suporte/Cintura.png" alt="Cintura"" />
              </div>
              <div class=" info">
              <p class="nome">Suporte na Cintura</p>
              <p class="descricao">Suporte para Cintura com dupla trava</p>
              <p class="preco">R$ 18,10</p>
              <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
            </div>
          </div>

          <div class="produto">
            <div class="produto-img">
              <img src="../imgs/suporte/universal.png" alt="Universal" />
            </div>
            <div class="info">
              <p class="nome">Suporte Universal</p>
              <p class="descricao">Suporte universal móvel e articulado</p>
              <p class="preco">R$ 15,90</p>
              <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
            </div>
          </div>
          <br>

          <div class="categoria">
            <h3>Fone e Carregador</h3>
            <div class="produtos">
              <div class="produto">
                <div class="produto-img">
                  <img src="../imgs/carregadorfones/carregadoriphone.jpg" alt="Carregador" />
                </div>
                <div class="info">
                  <p class="nome">Carregador Iphone + Cabo</p>
                  <p class="descricao">Fonte de Carregador Turbo e cabo tipo C</p>
                  <p class="preco">R$ 49,98</p>
                  <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
                </div>
              </div>

              <div class="produto">
                <div class="produto-img">
                  <img src="../imgs/carregadorfones/airpod.png" alt="airpod" />
                </div>
                <div class="info">
                  <p class="nome">AirPod</p>
                  <p class="descricao">AirPod Pro 1 + Peças de Reposição</p>
                  <p class="preco">R$ 149,10</p>
                  <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
                </div>
              </div>

              <div class="produto">
                <div class="produto-img">
                  <img src="../imgs/carregadorfones/fone.jpg" alt="Fone" />
                </div>
                <div class="info">
                  <p class="nome">Fone de Iphone</p>
                  <p class="descricao">Entrada Nova - a Cabo, com microfone</p>
                  <p class="preco">R$ 40,90</p>
                  <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
                </div>
              </div>

              <div class="produto">
                <div class="produto-img">
                  <img src="../imgs/carregadorfones/fonebt.jpg" alt="fonebt" />
                </div>
                <div class="info">
                  <p class="nome">Fone LTX80</p>
                  <p class="descricao">Lenovo Fone de Ouvido Sem Fio Original XT80 Esportivo Fones de Ouvido Sem Fio
                    HiFi Bluetooth</p>
                  <p class="preco">R$ 75,90</p>
                  <button class="adicionar-carrinho">Adicionar ao Carrinho</button>
                </div>
              </div>

              <div id="carrinho" class="carrinho">
                <h3>Seu Carrinho</h3>
                <ul id="lista-carrinho"></ul>
                <p id="total-carrinho">Total: R$ 0,00</p>
                <button id="checkout">Finalizar Compra</button>
              </div>

              <div id="modal-carrinho" class="modal-carrinho oculto">
                Produto adicionado ao carrinho!
              </div>

              <div id="modal-finalizado" class="modal-finalizado oculto">
                Compra finalizada com sucesso!
              </div>

              <script src="script.js"></script>

</body>

</html>