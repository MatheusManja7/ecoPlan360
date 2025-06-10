<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Gráfico de Custos por Recurso</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Gráfico de Custos por Recurso</h2>
    <canvas id="graficoCusto" width="800" height="400"></canvas>

    <script>
        async function carregarGrafico() {
            const response = await fetch('../../../Actions/action-dados-grafico.php');
            const dados = await response.json();

            if (dados.error) {
                alert('Erro ao carregar dados: ' + dados.error);
                return;
            }

            const labels = dados.map(item => item.recurso);
            const valores = dados.map(item => parseFloat(item.custo_total));

            const ctx = document.getElementById('graficoCusto').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Custo Total (R$)',
                        data: valores,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: value => 'R$ ' + value.toFixed(2)
                            }
                        }
                    }
                }
            });
        }

        carregarGrafico();
    </script>
</body>
</html>
