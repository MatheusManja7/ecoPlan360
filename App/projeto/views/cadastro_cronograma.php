<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/stayle-cronograma.css">
    <title>Cadastro do Cronograma</title>
</head>
<body>
    <main class="main">
        <div class="container__box">
            <div class="container__1"><img src="../../../Public/imgs/planta-fundo.png" alt=""></div>

            <div class="container__2">
                <h1>Schedule Form</h1>
                <p>Cadastre um novo Projeto</p>
                <p class="pp">ecoPlan360</p>
            </div>

            <div class="container__3">
                <form id="formCadastro" class="form__cronograma">
                    
                    <div class="form-group">
                        <label for="projeto">Nome do Projeto</label>
                        <input class="input" type="text" id="nome" name="nome" placeholder="digite o nome projeto" required>
                    </div>
            
                    <div class="form-group">
                        <label for="data_inicio">Data de Início</label>
                        <input class="input" type="date" id="data_inicio" name="data_inicio" required>
                    </div>
            
                    <div class="form-group">
                        <label for="duracao">Duração</label>
                        <input class="input" type="number" id="duracao" name="duracao" placeholder="duração (em dias)" required>
                    </div>
            
                    <div class="form-group">
                        <label for="responsavel">Responsável</label>
                        <input class="input" type="text" id="responsavel" name="responsavel" placeholder="digite o nome do responsável" require>
                    </div>
            
                    <div class="form-group">
                        <label for="descricao">Descrição do Projeto</label>
                        <textarea class="textarea" id="descricao" name="descricao" placeholder="faça uma breve descrição do projeto" rows="4"></textarea>
                    </div>
                    
                    <div class="div_button">

                        <button class="button" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </main>

    <script src="../../../Public/js/js-cadastro-cronograma.js"></script>
</body>
</html>