<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <title> halaman <?=$data['judul']; ?> </title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>/0">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/0">Home</a>
        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa ">Mahasiswa</a>
        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        
      </div>
    </div>
    <a class="badge bg-primary float-end" href="<?= BASEURL; ?>/login">Login</a>
  </div>
</nav>