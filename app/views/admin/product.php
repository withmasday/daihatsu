<div class="my-5 pt-5 container-fluid">
    <div class="row">
        <div class="col-sm-2 mb-2">
            <h4 class="mb-3 pt-2">Manage Product</h4>
        </div>
        <div class="col-sm-8 mb-2"></div>
        <div class="col-sm-2 mb-2">
            <a href="<?= BASEURL; ?>/admin/newproduct" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1">NEW PRODUCT</a>
        </div>
    </div>

    <div class="allprod">
      <?php foreach($data['dbAllProduct'] as $dbProduct): ?>
         <a href="<?= BASEURL; ?>/admin/product/<?= $dbProduct['car_code']; ?>" class="product-item m-1">
            <img src="<?= BASEURL; ?>/img/<?= $dbProduct['car_image']; ?>" class="product-image pe-2"/>
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