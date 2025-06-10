<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../Public/css/stayle-recursos.css">
  <title>Cadastro do Recurso</title>
</head>
<body>
  <main class="main">
    <div class="container__box">
      <div class="container__1">
        <h1>Cadastro de Recurso</h1>
        <form id="Form-Cadastro" class="form__cronograma">
          <div class="form-row">
            <div class="form-group">
              <label for="projeto_id">Projeto</label>
              <select id="projeto_id" name="projeto_id" required>
                <option value="">Selecione o projeto</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="recurso">Recurso</label>
              <input class="input" type="text" id="recurso" name="recurso" placeholder="Digite o nome do recurso" required>
            </div>
            <div class="form-group">
              <label for="quantidade">Quantidade</label>
              <input class="input" type="number" id="quantidade" name="quantidade" placeholder="Digite a quantidade" required>
            </div>
          </div>

          <div class="form-group">
            <label for="valor_unitario">Valor Unitário</label>
            <input class="input" type="text" id="valor_unitario" name="valor_unitario" placeholder="R$ 0,00" required>
          </div>

          <div class="div_button">
            <button class="button" type="submit">Cadastrar</button>
          </div>
        </form>
      </div>
      <div class="container__2">
        <img src="../../../Public/imgs/imagem-decorativa.jpg" alt="">
      </div>
    </div>
  </main>

  <script src="../../../Public/js/js-cadastro-recurso.js"></script>
</body>
</html>
