document.addEventListener("DOMContentLoaded", function () {
  const campoNascimento = document.getElementById("nascimento");
  aplicarMascaraData(campoNascimento);
});


function mascaraCPF(value) {
  return value
    .replace(/\D/g, "")
    .replace(/(\d{3})(\d)/, "$1.$2")
    .replace(/(\d{3})(\d)/, "$1.$2")
    .replace(/(\d{3})(\d{1,2})$/, "$1-$2");
}

function mascaraTelefone(value) {
  let numbers = value.replace(/\D/g, "");
  if (numbers.startsWith("55")) numbers = numbers.slice(2);
  numbers = numbers.slice(0, 10);
  let ddd = numbers.slice(0, 2);
  let numero = numbers.slice(2);
  return `(+55)${ddd}${numero ? "-" + numero : ""}`;
}

function protegerPrefixo(input) {
  input.addEventListener("keydown", (e) => {
    if (input.selectionStart <= 5 && ["Backspace", "ArrowLeft"].includes(e.key)) {
      e.preventDefault();
      input.setSelectionRange(6, 6);
    }
  });

  input.addEventListener("focus", () => {
    if (input.value.length < 6) input.value = "(+55)";
    setTimeout(() => {
      if (input.selectionStart < 6) input.setSelectionRange(6, 6);
    }, 0);
  });
}

const cpfInput = document.getElementById("cpf");
const celularInput = document.getElementById("celular");
const fixoInput = document.getElementById("fixo");
const nomeInput = document.getElementById("nome");
const nomeMaeInput = document.getElementById("nomemae");
const senhaInput = document.getElementById("senha");
const confirmarInput = document.getElementById("confirmar");
const loginInput = document.getElementById("login");
const cepInput = document.getElementById("cep");

cpfInput.addEventListener("input", () => cpfInput.value = mascaraCPF(cpfInput.value));
celularInput.addEventListener("input", () => celularInput.value = mascaraTelefone(celularInput.value));
fixoInput.addEventListener("input", () => fixoInput.value = mascaraTelefone(fixoInput.value));

protegerPrefixo(celularInput);
protegerPrefixo(fixoInput);

[nomeInput, nomeMaeInput].forEach(input => {
  input.addEventListener("input", () => {
    input.value = input.value.replace(/[^A-Za-zÀ-ÖØ-öø-ÿ\s]/g, "");
  });
});

[senhaInput, confirmarInput, loginInput].forEach(input => {
  input.addEventListener("input", () => {
    input.value = input.value.replace(/[^A-Za-z]/g, "");
  });
});

cepInput.addEventListener("input", () => {
  let cep = cepInput.value.replace(/\D/g, "").slice(0, 8);
  if (cep.length >= 6) cep = cep.slice(0, 5) + "-" + cep.slice(5);
  cepInput.value = cep;
});

function validarCPF(cpf) {
  cpf = cpf.replace(/\D/g, "");
  if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
  let soma = 0;
  for (let i = 0; i < 9; i++) soma += parseInt(cpf.charAt(i)) * (10 - i);
  let resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  if (resto !== parseInt(cpf.charAt(9))) return false;
  soma = 0;
  for (let i = 0; i < 10; i++) soma += parseInt(cpf.charAt(i)) * (11 - i);
  resto = (soma * 10) % 11;
  if (resto === 10 || resto === 11) resto = 0;
  return resto === parseInt(cpf.charAt(10));
}

function validarAlfabetico(str, min, max) {
  return /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/.test(str) && str.length >= min && str.length <= max;
}

function validarSenhaLogin(str, tamanho) {
  return /^[A-Za-z]+$/.test(str) && str.length === tamanho;
}

function validarTelefone(tel) {
  return /^\(\+55\)\d{2}-\d{8}$/.test(tel);
}

cepInput.addEventListener("blur", async () => {
  const cep = cepInput.value.replace(/\D/g, "");
  if (cep.length !== 8) return cepInput.classList.add("input-error");

  try {
    const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
    const data = await response.json();

    if (data.erro) return cepInput.classList.add("input-error");

    cepInput.classList.remove("input-error");
    document.getElementById("rua").value = data.logradouro || "";
    document.getElementById("bairro").value = data.bairro || "";
    document.getElementById("municipio").value = data.localidade || "";
    document.getElementById("uf").value = data.uf || "";
  } catch {
    cepInput.classList.add("input-error");
  }
});

const form = document.getElementById("formCadastro");
form.addEventListener("submit", (e) => {
  e.preventDefault();

  const campos = ["nome", "nomemae", "cpf", "senha", "confirmar", "celular", "fixo", "login"];
  campos.forEach(id => {
    const el = document.getElementById(id + "Error");
    if (el) el.innerText = "";
  });

  const nome = form.nome.value.trim();
  const nomemae = form.nomemae.value.trim();
  const cpf = form.cpf.value.trim();
  const senha = form.senha.value.trim();
  const confirmar = form.confirmar.value.trim();
  const celular = form.celular.value.trim();
  const fixo = form.fixo.value.trim();
  const login = form.login.value.trim();

  let valido = true;

  if (!validarAlfabetico(nome, 15, 80)) {
    document.getElementById("nomeError").innerText = "Nome deve conter apenas letras e ter entre 15 e 80 caracteres.";
    valido = false;
  }

  if (!validarAlfabetico(nomemae, 1, 80)) {
    document.getElementById("nomemaeError").innerText = "Nome da mãe deve conter apenas letras.";
    valido = false;
  }

  if (!validarCPF(cpf)) {
    document.getElementById("cpfError").innerText = "CPF inválido.";
    valido = false;
  }

  if (!validarSenhaLogin(senha, 8)) {
    document.getElementById("senhaError").innerText = "Senha deve conter exatamente 8 letras.";
    valido = false;
  }

  if (!validarSenhaLogin(confirmar, 8)) {
    document.getElementById("confirmarError").innerText = "Confirmação deve conter exatamente 8 letras.";
    valido = false;
  }

  if (senha !== confirmar) {
    document.getElementById("confirmarError").innerText = "As senhas não coincidem.";
    valido = false;
  }

  if (!validarTelefone(celular)) {
    document.getElementById("celularError").innerText = "Telefone celular deve estar no formato (+55)XX-XXXXXXXX.";
    valido = false;
  }

  if (fixo && !validarTelefone(fixo)) {
    document.getElementById("fixoError").innerText = "Telefone fixo deve estar no formato (+55)XX-XXXXXXXX.";
    valido = false;
  }

  if (!validarSenhaLogin(login, 6)) {
    document.getElementById("loginError").innerText = "Login deve conter exatamente 6 letras.";
    valido = false;
  }

  if (!valido) return;

  if (localStorage.getItem(`user_${login}`)) {
    alert("Usuário já existe. Escolha outro login.");
    return;
  }

  const novoUsuario = {
    nome,
    nomemae,
    cpf,
    senha,
    celular,
    fixo,
    login,
    email: form.email.value.trim(),
    nascimento: form.nascimento.value,
    sexo: form.sexo.value,
    cep: form.cep.value.trim(),
    rua: form.rua.value.trim(),
    numero: form.numero.value.trim(),
    bairro: form.bairro.value.trim(),
    municipio: form.municipio.value.trim(),
    uf: form.uf.value
  };

  localStorage.setItem(`user_${login}`, JSON.stringify(novoUsuario));

  form.innerHTML = `
    <h2 class="success">Cadastro realizado com sucesso!</h2>
    <div class="form buttons" style="justify-content: center; margin-top: 1rem;">
      <a href="../login/login.php" class="btn-entrar">Entrar</a>
    </div>
  `;
});
