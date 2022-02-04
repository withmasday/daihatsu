<section class="container-fluid mt-5 pt-3">
   <div id="carouselExampleIndicators" class="carousel slide w-100 mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="<?= BASEURL; ?>/img/slide-01.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/slide-02.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/slide-03.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/slide-04.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/slide-05.jpg" class="d-block w-100" alt="...">
         </div>
         <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/slide-06.jpg" class="d-block w-100" alt="...">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
   </div>
</section>
<div class="mt-3 container-fluid">
   <div class="car-type">
      <?php foreach($data['dbCategory'] as $dbcategory): ?>
         <a href="<?= BASEURL; ?>/product/type/<?= $dbcategory['category_code']; ?>" class="car-item mx-2">
            <img src="<?= BASEURL; ?>/img/<?= $dbcategory['category_image']; ?>"/>
            <div class="cname"><?= $dbcategory['category_name']; ?></div>
         </a>
      <?php endforeach; ?>
   </div>
</div>
<div class="my-3 container-fluid">
   <h5>Baru Ditambahkan</h5>
   <div class="row mt-3">
      <?php foreach($data['dbNewProduct'] as $dbNewProduct): ?>
         <div class="col-sm-2 my-2">
            <div class="card">
               <div class="card-body p-0 pb-1">
                  <img src="<?= BASEURL; ?>/img/<?= $dbNewProduct['car_image']; ?>" class="card-img-top mb-2 pe-2" alt="...">
                  <div class="product-name p-2 pb-2">Daihatsu <?= $dbNewProduct['car_name']; ?></div>
                  <div class="product-detail px-2 mb-3">
                     <i class="bi bi-cash-stack"></i>
                     Rp. <?php echo number_format($dbNewProduct['car_price'], 0, ',', '.'); ?>
                  </div>
                  <div class="product-detail px-2 mb-3">
                     <i class="bi bi-check2-circle"></i>
                     Angsuran Biaya
                  </div>
               </div>
            </div>
            <div class="text-center">
               <a href="<?= BASEURL; ?>/product/unit/<?= $dbNewProduct['car_code']; ?>" class="btn-detail-product">Lihat Detail</a>
            </div>
         </div>
      <?php endforeach; ?>
   </div>

   <div class="row mt-4">
      <div class="col-sm">
         <h5 class="py-2">Produk Lainnya</h5>
      </div>
      <div class="col-sm">
         <div class="float-end">
            <div class="row">
               <div class="col-sm mb-2">
                  <input type="text" class="form-control w-100" id="searchbar" placeholder="Pencarian"/>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="allprod">
      <?php foreach($data['dbAllProduct'] as $dbProduct): ?>
         <a href="<?= BASEURL; ?>/product/unit/<?= $dbProduct['car_code']; ?>" class="product-item m-1">
            <img src="<?= BASEURL; ?>/img/<?= $dbProduct['car_image']; ?>" class="product-image"/>
            <div class="detail">
               <div class="product-name px-2 pb-2"><?php echo substr_replace($dbProduct['car_name'], '', 22); ?></div>
               <div class="product-detail px-2 mb-3">
                  <i class="bi bi-cash-stack"></i>
                  Rp. <?php echo number_format($dbProduct['car_price'], 0, ',', '.'); ?>
               </div>
               <div class="product-detail px-2 mb-3">
                  <i class="bi bi-check2-circle"></i>
                  Angsuran Biaya
               </div>
            </div>
         </a>
      <?php endforeach; ?>
   </div>
</div>