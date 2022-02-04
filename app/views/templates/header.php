<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/app.css">
      <title>DaihasuWeb | <?= $data['judul']; ?></title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light py-2 fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="" width="45px" height="45px" class="rounded-3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link<?= $data['isBeranda']; ?>" href="<?= BASEURL; ?>">Beranda</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle<?= $data['isProduct']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Produk
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach($data['dbCategory'] as $dbcategory): ?>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/product/type/<?= $dbcategory['category_code']; ?>"><?= $dbcategory['category_name']; ?></a></li>
                        <?php endforeach; ?>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link<?= $data['isArtikel']; ?>" href="<?= BASEURL; ?>/artikel">Artikel</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link<?= $data['isGallery']; ?>" href="<?= BASEURL; ?>/gallery">Gallery Delivery</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link<?= $data['isAbout']; ?>" href="<?= BASEURL; ?>/about">Tentang Kami</a>
                  </li>
               </ul>
               <div class="d-flex">
                  <?php Session::navbarUser(); ?>
               </div>
            </div>
         </div>
      </nav>

