<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>gráfico 2</title>
</head>
<body>
    <h2>Gráfico de Custo Total dos Projeto</h2>
    <canvas id="graficoTotal"></canvas>

    <script>
        async function carregarGraficototal() {
            const response = await fetch('../../../Actions/action-projetos-grafico.php');
            const dados = await response.json();

            if (dados.error) {
                alert("Erro: " + dados.error);
                return;
            }

            const total = parseFloat(dados.custo_total_geral);

            const ctx = document.getElementById('graficoTotal').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Custo Total Geral'],
                    datasets: [{
                        label: 'Total (R$)',
                        data: [total],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                call: value => 'R$ ' + value.toFixed(2)
                            }
                        }
                    }
                }
            });
        }

        carregarGraficototal();
    </script>
</body>
</html>