document.addEventListener("DOMContentLoaded", async () => {
  const tabela = document.getElementById("tabelaCronograma");

  try {
    // Ajuste a URL para seu action-projeto.php com ?listar=1
    const response = await fetch("../../../Actions/action-projeto.php?listar=1");
    const data = await response.json();

    if (data.success && data.projetos.length > 0) {
      data.projetos.forEach((projeto) => {
        const row = document.createElement("tr");

        row.innerHTML = `
          <td>${projeto.id_projeto}</td>
          <td>${projeto.nome}</td>
          <td>${projeto.data_inicio}</td>
          <td>${projeto.duracao}</td>
          <td>${projeto.responsavel}</td>
          <td>${projeto.descricao}</td>
        `;

        tabela.appendChild(row);
      });
    } else {
      tabela.innerHTML = `<tr><td colspan="6">${data.mensagem || "Nenhum projeto encontrado."}</td></tr>`;
    }
  } catch (error) {
    console.error("Erro ao buscar os projetos:", error);
    tabela.innerHTML = `<tr><td colspan="6">Erro ao carregar os projetos</td></tr>`;
  }
});
