<?php
$c_name = $this->request->getParam('controller');
$a_name = $this->request->getParam('action');

// echo $a_name;
// exit;
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href=<?= $this->Url->build(['controller' => 'admin/users', 'action' => 'login']); ?>>Iniciar Sesión</a>

  <a class="navbar-brand" href=<?= $this->Url->build(['controller' => 'admin/producto', 'action' => 'publico']); ?>>Productos</a>

  <a class="navbar-brand" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'about']); ?>>¿Quienes somos?</a>
</nav>