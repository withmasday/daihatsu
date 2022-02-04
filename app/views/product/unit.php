<div class="container-fluid mt-5 pt-5">
  <div class="row pt-5">
    <div class="col-sm-4 my-3">
      <img src="<?=BASEURL; ?>/img/<?=$data['dbProductCode']['car_image']; ?>" class="w-100 rounded-3"/>
    </div>

    <div class="col-sm-4 my-3">
      <h5 class="mb-3">Daihatsu <?=$data['dbProductCode']['car_name']; ?></h5>
      <h6 class="mb-3 text-red">
        Rp. <?php echo number_format($data['dbProductCode']['car_price'], 0, ',', '.'); ?>
      </h6>
      <div class="product-detail mb-3 me-2">
        <i class="bi bi-check2-circle"></i>
        Angsuran Biaya
      </div>
      <div class="product-detail mb-3 me-2">
        <i class="bi bi-check2-circle"></i>
        Beragam Warna
      </div>

      <p class="d-block product-detail" style="text-indent: 40px">
        <?=$data['dbProductCode']['car_detail']; ?>
      </p>
    </div>

    <div class="col-sm my-3">
      <div class="accordion bg-light">
        <?php foreach ($data['dbAngsuran'] as $dbangsuran): ?>
          <div class="accordion-item">
            <h5 class="accordion-header bg-light" id="flush-heading<?=$dbangsuran['angsuran_percent']; ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$dbangsuran['angsuran_percent']; ?>" aria-expanded="false" aria-controls="flush-collapse<?=$dbangsuran['angsuran_percent']; ?>">
                Angsuran <?=$dbangsuran['angsuran_percent']; ?>%
              </button>
            </h5>

            <div id="flush-collapse<?=$dbangsuran['angsuran_percent']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$dbangsuran['angsuran_percent']; ?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-7">
                    <div class="product-detail mb-3 d-block">
                      <i class="bi bi-check2-circle"></i>
                      Rp. <?php echo number_format($dbangsuran['angsuran_12bulan'], 0, ',', '.'); ?>
                        <span class="badge bg-danger2">12 x</span>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <i class="bi bi-check2-circle"></i>
                      Rp. <?php echo number_format($dbangsuran['angsuran_24bulan'], 0, ',', '.'); ?>
                        <span class="badge bg-danger2">24 x</span>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <i class="bi bi-check2-circle"></i>
                      Rp. <?php echo number_format($dbangsuran['angsuran_36bulan'], 0, ',', '.'); ?>
                        <span class="badge bg-danger2">36 x</span>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <i class="bi bi-check2-circle"></i>
                      Rp. <?php echo number_format($dbangsuran['angsuran_48bulan'], 0, ',', '.'); ?>
                        <span class="badge bg-danger2">48 x</span>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <i class="bi bi-check2-circle"></i>
                      Rp. <?php echo number_format($dbangsuran['angsuran_60bulan'], 0, ',', '.'); ?>
                        <span class="badge bg-danger2">60 x</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-detail mb-3 d-block">
                      <span class="badge bg-danger2">TDP</span> Rp. <?php echo number_format($dbangsuran['tdp'], 0, ',', '.'); ?>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <span class="badge bg-danger2">TDP</span> Rp. <?php echo number_format($dbangsuran['tdp'], 0, ',', '.'); ?>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <span class="badge bg-danger2">TDP</span> Rp. <?php echo number_format($dbangsuran['tdp'], 0, ',', '.'); ?>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <span class="badge bg-danger2">TDP</span> Rp. <?php echo number_format($dbangsuran['tdp'], 0, ',', '.'); ?>
                    </div>
                    <div class="product-detail mb-3 d-block">
                      <span class="badge bg-danger2">TDP</span> Rp. <?php echo number_format($dbangsuran['tdp'], 0, ',', '.'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="row pb-5">
    <div class="col-sm-8"></div>
    <div class="col-sm-2">
      <a href="<?= BASEURL; ?>/" class="btn btn-outline-red rounded-me w-100 py-2 my-1 hide-mobile">Kembali</a>
      <a href="<?= BASEURL; ?>/checkout" class="btn btn-red rounded-me w-100 py-2 my-1 hide-desktop">Checkout</a>
    </div>
    <div class="col-sm-2">
      <a href="<?= BASEURL; ?>/" class="btn btn-outline-red rounded-me w-100 py-2 my-1 hide-desktop">Kembali</a>
      <a href="<?= BASEURL; ?>/checkout" class="btn btn-red rounded-me w-100 py-2 my-1 hide-mobile">Checkout</a>
    </div>
  </div>
</div>

