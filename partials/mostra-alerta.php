<?php
  session_start();
  function mostrarAlerta($tipo){
    if (isset($_SESSION[$tipo])) { ?>
      <p class="alert-<?=$tipo?> text-md-center text-sm-center text-xs-center"><?=$_SESSION[$tipo]?></p>
    <?php
      unset($_SESSION[$tipo]);
    }
  }
