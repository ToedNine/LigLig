  const btns = document.querySelectorAll('.adicionar-carrinho');
  const lista = document.getElementById('lista-carrinho');
  const totalEl = document.getElementById('total-carrinho');
  const modalAdd = document.getElementById('modal-carrinho');
  const modalFim = document.getElementById('modal-finalizado');
  let total = 0;

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      const produto = btn.closest('.produto');
      const nome = produto.querySelector('.nome').textContent;
      const precoText = produto.querySelector('.preco').textContent;
      const preco = parseFloat(precoText.replace('R$', '').replace('.', '').replace(',', '.'));

      const item = document.createElement('li');
      item.textContent = `${nome} - R$ ${preco.toFixed(2).replace('.', ',')}`;
      lista.appendChild(item);

      total += preco;
      totalEl.textContent = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;

      modalAdd.classList.remove('oculto');
      setTimeout(() => modalAdd.classList.add('oculto'), 1000);
    });
  });

  document.getElementById('checkout').addEventListener('click', () => {
    if (lista.children.length > 0) {
      lista.innerHTML = '';
      total = 0;
      totalEl.textContent = 'Total: R$ 0,00';
      modalFim.classList.remove('oculto');
      setTimeout(() => modalFim.classList.add('oculto'), 1000);
    }
  });

