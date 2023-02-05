<!DOCTYPE html>
<html>
<head>
 <title><?= $data['title']; ?></title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container">
   <a class="navbar-brand" href="<?= BASEURL; ?>/dashboard">Dashboard</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/hakakses">Hak Akses</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/pengguna">Pengguna</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/barang">Barang</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/supplier">Supplier</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/pelanggan">Pelanggan</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/pembelian">Pembelian</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/penjualan">Penjualan</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        
      </div>
    </div>
   </div>

</nav> 
