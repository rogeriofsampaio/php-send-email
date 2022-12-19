<?php
  require_once ("partials/cabecario.php");
?>

  <h4>Contato</h4>

  <form action="envia-contato.php" method="post">

    <fieldset class="form-group">
      <label for="nome">Nome</label>
      <input type="nome" class="form-control" id="nome" name="nome" placeholder="Seu nome">
    </fieldset>

    <fieldset class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>

    <fieldset class="form-group">
      <label for="mensagem">Mensagem</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
    </fieldset>

    <button type="submit" class="btn btn-primary">Enviar</button>

  </form>

<?php require_once ("partials/rodape.php"); ?>
