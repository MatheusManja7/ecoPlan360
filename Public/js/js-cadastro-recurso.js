document.addEventListener('DOMContentLoaded', async () => {
  const selectProjeto = document.getElementById('projeto_id');

  try {
    const response = await fetch('../../../Actions/action-recurso.php?listar_projetos=1');
    const text = await response.text();
    console.log('Resposta bruta do servidor:', text);

    const data = JSON.parse(text);

    if (data.success) {
      data.projetos.forEach(projeto => {
        const option = document.createElement('option');
        option.value = projeto.id_projeto;
        option.textContent = projeto.nome;
        selectProjeto.appendChild(option);
      });
    } else {
      alert('Erro ao carregar projetos: ' + data.mensagem);
    }
  } catch (error) {
    console.error('Erro ao buscar projetos:', error);
    alert('Erro ao carregar projetos, veja o console.');
  }
});

const form = document.getElementById('Form-Cadastro');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  formData.append('cadastrar', '1');

  try {
    const response = await fetch('../../../Actions/action-recurso.php', {
      method: 'POST',
      body: formData,
    });

    const text = await response.text();
    try {
      const data = JSON.parse(text);
      if (data.success) {
        alert(data.mensagem);
        form.reset();
      } else {
        alert('Erro: ' + data.mensagem);
      }
    } catch (jsonError) {
      console.error('Erro ao converter JSON:', jsonError);
      console.log('Resposta bruta:', text);
      alert('Erro inesperado. Veja o console.');
    }
  } catch (error) {
    console.error('Erro na requisição:', error);
    alert('Erro de conexão. Veja o console.');
  }
});
