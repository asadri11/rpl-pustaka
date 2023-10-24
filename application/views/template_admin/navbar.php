<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">
</head>
<body>
    
<!-- NAVBAR START -->
<nav class="navbar bg-dark navbar-expand-lg  " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pustaka Jelek</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Beranda</a>
        <a class="nav-link" href="<?= base_url('Admin/Siswa');?>#">Siswa</a>
        <a class="nav-link" href="#">Buku</a>
        <a class="nav-link" >Peminjaman</a>
      </div>
    </div>
  </div>
</nav>
    <!-- NAVBAR END -->
    <div class="container">
