<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registrar</title>
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

  <h1>Registre-se</h1>

  <section class="container">
    <img src="../imgs/liglig.jpeg" alt="Logo da Loja" class="logo-img" />

    <div class="form-wrapper">
      <form id="formCadastro" class="form">
        <div class="form">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required minlength="15"
            maxlength="80" />
          <div id="nomeError" class="error"></div>
        </div>

        <div class="form">
          <label for="nascimento">Data de Nascimento:</label>
          <input type="date" id="nascimento" name="nascimento" required />
        </div>

        <div class="form">
          <label for="sexo">Sexo:</label>
          <select id="sexo" name="sexo" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
            <option value="prefiro-nao-dizer">Prefiro não dizer</option>
          </select>
        </div>

        <div class="form">
          <label for="nomemae">Nome da Mãe</label>
          <input type="text" id="nomemae" name="nomemae" placeholder="Nome completo da mãe" required />
          <div id="nomemaeError" class="error"></div>
        </div>

        <div class="form">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00" required />
          <div id="cpfError" class="error"></div>
        </div>

        <div class="form">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="exemplo@email.com" required />
        </div>

        <div class="form">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="8 caracteres alfabéticos" required maxlength="8"
            minlength="8" />
          <div id="senhaError" class="error"></div>
        </div>

        <div class="form">
          <label for="confirmar">Confirmar Senha</label>
          <input type="password" id="confirmar" name="confirmar" placeholder="Repita a senha" required maxlength="8"
            minlength="8" />
          <div id="confirmarError" class="error"></div>
        </div>

        <div class="form">
          <label for="celular">Telefone Celular:</label>
          <input type="tel" id="celular" name="celular" placeholder="(+55)XX-XXXXXXXX" required />
          <div id="celularError" class="error"></div>
        </div>

        <div class="form">
          <label for="fixo">Telefone Fixo:</label>
          <input type="tel" id="fixo" name="fixo" placeholder="(+55)XX-XXXXXXXX" />
          <div id="fixoError" class="error"></div>
        </div>

        <div class="form">
          <label for="login">Login:</label>
          <input type="text" id="login" name="login" placeholder="6 caracteres alfabéticos" required minlength="6"
            maxlength="6" />
          <div id="loginError" class="error"></div>
        </div>

        <div class="form">
          <label for="cep">CEP:</label>
          <input type="text" id="cep" name="cep" placeholder="00000-000" required />
        </div>

        <div class="form">
          <label for="rua">Rua:</label>
          <input type="text" id="rua" name="rua" required />
        </div>

        <div class="form">
          <label for="numero">Número:</label>
          <input type="text" id="numero" name="numero" required />
        </div>

        <div class="form">
          <label for="bairro">Bairro:</label>
          <input type="text" id="bairro" name="bairro" required />
        </div>

        <div class="form">
          <label for="municipio">Município:</label>
          <input type="text" id="municipio" name="municipio" required />
        </div>

        <div class="form">
          <label for="uf">UF:</label>
          <select id="uf" name="uf" required>
            <option value="">Selecione</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          </select>
        </div>

        <div class="form buttons">
          <button type="submit">Registrar</button>
          <button type="reset">Limpar Tela</button>
        </div>
      </form>
    </div>
  </section>


  <script src="register.js"></script>
</body>

</html>