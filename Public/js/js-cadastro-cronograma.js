const form = document.getElementById("formCadastro");

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  formData.append("cadastrar", "1");

  try {
    const response = await fetch("../../../Actions/action-projeto.php", {
      method: "POST",
      body: formData,
    });

    const text = await response.text();
    try {
      const data = JSON.parse(text);
      if (data.success) {
        alert(data.mensagem);
        form.reset();
      } else {
        alert("Erro: " + data.mensagem);
      }
    } catch (jsonError) {
      console.error("Erro ao converter JSON:", jsonError);
      console.log("Resposta bruta:", text);
      alert("Erro inesperado. Veja o console.");
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    alert("Erro de conexão. Veja o console.");
  }
});
