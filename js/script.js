window.onload = function(){
  document.querySelector(".menu_mobile").addEventListener("click", function(){
      if(document.querySelector(".menu .links").style.display == "block"){
          document.querySelector(".menu .links").style.display = "none";
      }else{
          document.querySelector(".menu .links").style.display = "block";
      }
  })
}

// para o a

function fechaMenu() {
  var $menu = document.querySelector(".menu .links");

  if ($menu.style.display == "block"){
      $menu.style.display = "none";
  }
}

if(window.SimpleForm) {
	new SimpleForm({
	  form: ".formphp", // seletor do formulário
	  button: "#enviar", // seletor do botão
	  erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>Um erro ocorreu, tente para o email gessicaos@outlook.com.</p></div>", // mensagem de erro
	  sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
	});
}