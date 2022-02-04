<div class="my-5 pt-3 container-fluid">
   <div class="row mt-4">
      <div class="col-sm-3">
         <h5 class="py-2"><?= $data['dbProdNameOfCategory']['category_name'];; ?></h5>
      </div>
      <div class="col-sm-6"></div>
      <div class="col-sm-3">
         <div class="mb-2">
            <input type="text" class="form-control w-100" id="searchbar" placeholder="Pencarian"/>
         </div>
      </div>
   </div>
   
   <div class="allprod">
      <?php foreach($data['dbProductType'] as $dbProductType):
            $price = $dbProductType['car_price'];
            $convert_price  = number_format($price, 0, ',', '.');
      ?>
         <a href="<?= BASEURL; ?>/product/unit/<?= $dbProductType['car_code']; ?>" class="product-item m-1">
            <img src="<?= BASEURL; ?>/img/<?= $dbProductType['car_image']; ?>" class="product-image"/>
            <div class="detail">
               <div class="product-name px-2 pb-2"><?php echo substr_replace($dbProductType['car_name'], '', 22); ?></div>
               <div class="product-detail px-2 mb-3">
                  <i class="bi bi-cash-stack"></i>
                  Rp. <?php echo $convert_price; ?>
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

<div class="mt-3 container-fluid">
   <h5 class="py-2">Produk Lainnya</h5>
   <div class="car-type">
      <?php foreach($data['dbCategory'] as $dbcategory): ?>
         <a href="<?= BASEURL; ?>/product/type/<?= $dbcategory['category_code']; ?>" class="car-item mx-2">
            <img src="<?= BASEURL; ?>/img/<?= $dbcategory['category_image']; ?>"/>
            <div class="cname"><?= $dbcategory['category_name']; ?></div>
         </a>
      <?php endforeach; ?>
   </div>
</div>