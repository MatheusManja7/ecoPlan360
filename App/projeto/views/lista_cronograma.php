<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Projetos</title>
  <link rel="stylesheet" href="../../../Public/css/stayle-lista-cronograma.css">
</head>
<body>
  <main class="main">
    <div class="container">
        <h1>Cronograma de Projetos</h1>
        <div class="container__table">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Projeto</th>
                        <th>Data_inicio</th>
                        <th>Duração (dias)</th>
                        <th>Responsavel</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody id="tabelaCronograma">
                </tbody>
            </table>
        </div>
    </div>
  </main>

  <script src="../../../Public/js/js-listar-cronograma.js"></script>
</body>
</html>
