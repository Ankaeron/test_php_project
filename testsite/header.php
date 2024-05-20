<!doctype html>
<?php 
    session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rent</title>
  </head>
  
  <header>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
  <script src="/docs/5.3/assets/js/docs.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Аренда машин</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="2.php">2</a>
        </li>
        <?php
        if (isset($_SESSION["userid"]))
        {
            echo '<li class="nav-item">
            <a class="nav-link" href="3.php">3</a>
          </li>';
        }
        ?>
        
        <li class="nav-item">
          <a class="nav-link" href="4.php">4</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="login.php" class="btn btn-primary">Войти/зарегистрироваться</a>
      </form>
    </div>
  </div>
  </header>
</nav>