document.addEventListener("DOMContentLoaded", async () => {
    const tabela = document.getElementById("tabelaRecursos");

    try{
        const response = await fetch("../../../Actions/action-recurso.php?listar=1");
        const data = await response.json();

        if (data.success) {
            data.recursos.forEach((recurso) => {
                const row = document.createElement("tr");

                row.innerHTML = `
                    <td>${recurso.id_recurso}</td>
                    <td>${recurso.projeto_id}</td>
                    <td>${recurso.recurso}</td>
                    <td>${recurso.quantidade}</td>
                    <td>${recurso.valor_unitario}</td>
                `;

                tabela.appendChild(row);
            });
        } else {
            tabela.innerHTML = `<tr><td colspan="6">${data.mensagem}</tr></td>`;
        }
    } catch (error) {
        console.error("Erro ao buscar recursos:", error);
        tabela.innerHTML = `<tr><td colspan="6">Erro ao carregar recursos</td></tr>`;
    }
});