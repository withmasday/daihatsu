<div class="container-fluid mt-5 pt-5">
    <h4 class="mb-4">
        <i class="bi bi-bag-check-fill text-red me-2"></i> Pesanan Kamu
    </h4>
    <div class="allprod mt-3">
      <?php if (!empty($data['dbUserOrder'])) { ?>
        <?php foreach($data['dbUserOrder'] as $dbUserOrder): ?>
            <a href="<?= BASEURL; ?>/product/unit/<?= $dbUserOrder['car_code']; ?>" class="product-item m-1">
                <img src="<?= BASEURL; ?>/img/<?= $dbUserOrder['car_image']; ?>" class="product-image pe-2"/>
                <div class="detail">
                <div class="product-name px-2 pb-2"><?= $dbUserOrder['car_name']; ?></div>
                <div class="product-detail px-2 mb-3">
                    <i class="bi bi-cash-stack"></i>
                    <?= $dbUserOrder['pembayaran']; ?>
                </div>
                <div class="product-detail px-2 mb-3">
                <?php
                    if ($dbUserOrder['order_status'] == 0) {
                        echo '<i class="bi bi-clock-fill"></i>'. $dbUserOrder['order_date'] .'<span class="badge ms-2 bg-danger2">PENDING</span>';
                    } else  {
                        echo '<i class="bi bi-check2-circle"></i>'. $dbUserOrder['order_date'] .'<span class="badge ms-2 bg-primary">PROCESS</span>';
                    }
                ?>
                </div>
                </div>
            </a>
        <?php endforeach; ?>
      <?php } else { ?>
          <div class="mt-5 pt-5 d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
          </div>
          <h6 class="text-center mb-5 pb-5 pt-5">Tidak Ada Pesanan Untuk Saat Ini <3 </h6>
      <?php } ?>
   </div>
</div>