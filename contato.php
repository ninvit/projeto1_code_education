<div class="row">


<?php

if (isset($_POST['submit'])) {

    echo " <span class='bg-success'>Dados enviados com sucesso, abaixo seguem os dados que você enviou </span> <br>";

    if(isset($_POST['nome']))
    {
         echo "nome: " . $_POST['nome'] . "<br>";
    }
    if(isset($_POST['email']))
    {
        echo "email: " . $_POST['email'] . "<br>";
    }

    if(isset($_POST['assunto']))
    {
        echo "Assunto :" .  $_POST['assunto'] .  " <br>";
    }
    if(isset($_POST['mensagem']))
    {
        echo "Mensagem: " .  "<p>" . $_POST['mensagem'] . "</p> <br> ";
    }
}
?>

</div>

<div class="col-lg-6">
    <h2>Contato</h2>
  <form action="?pagina=contato" method="post">
      <input type="hidden" value="dados_enviado" />
      <div class="form-group">
         <label  for="nome">Nome</label>
         <input class="form-control small" type="text" name="nome" id="nome" />
   </div>

      <div class="form-group">
         <label for="email">E-mail</label>
         <input  class="form-control" type="text" name="email" id="email" />
      </div>
      <div class="form-group">
         <label for="assunto">Assunto</label>
         <input class="form-control" type="text" name="assunto" id="assunto" />
    </div>
      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" name="mensagem" id="mensagem"></textarea>
      </div>
    <input type="submit"  value="Enviar" name="submit" class="btn btn-sm" />

  </form>

</div>