<div class="container-fluid mt-5 pt-3">
  <form method="post" novalidate="novalidate">
    <div class="row pt-5 d-flex justify-content-center">
      <div class="col-sm-6">
        <h3 class="mb-4">
          <i class="bi bi-bag-check-fill text-red me-2"></i> Check Out
        </h3>
        <hr class="w-100"/>
        <img src="<?=BASEURL; ?>/img/<?=$data['dbProductCode']['car_image']; ?>" class="mt-3 w-100"/>
        <h5 class="mb-3">Daihatsu <?=$data['dbProductCode']['car_name']; ?></h5>
        <h6 class="mb-3 text-red">
          Rp. <?php echo number_format($data['dbProductCode']['car_price'], 0, ',', '.'); ?>
        </h6>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
        <div class="checkout-default px-3 pt-2 pb-1 mb-2 shadow-sm rounded-3">
          <h6 class="d-inline-block">Gunakan Data Bawaan</h6>
          <input type="checkbox" class="mt-2 float-end" id="showdata" onclick="ShowData()"/>
        </div>

        <div class="mb-2">
          <label class="form-label pt-2">Nama</label>
          <input type="text" class="form-control border-0 bg-light rounded-3" name="u_name" id="u_name" required>
        </div>

        <div class="mb-2">
          <label class="form-label">Pembayaran</label>
          <select class="form-select border-0 bg-light rounded-3" name="pembayaran" aria-label="Default select example">
            <option value="" selected>Pilih Pembayaran</option>
            <option value="Cash">Cash</option>
          <?php foreach ($data['dbAngsuran'] as $dbangsuran): ?>
            <option value="Rp. <?php echo number_format($dbangsuran['angsuran_12bulan'], 0, ',', '.'); ?> 12x"><?= $dbangsuran['angsuran_percent'] ?>% | Rp. <?php echo number_format($dbangsuran['angsuran_12bulan'], 0, ',', '.'); ?> | 12 x</option>
            <option value="Rp. <?php echo number_format($dbangsuran['angsuran_24bulan'], 0, ',', '.'); ?> 24x"><?= $dbangsuran['angsuran_percent'] ?>% | Rp. <?php echo number_format($dbangsuran['angsuran_24bulan'], 0, ',', '.'); ?> | 24 x</option>
            <option value="Rp. <?php echo number_format($dbangsuran['angsuran_36bulan'], 0, ',', '.'); ?> 36x"><?= $dbangsuran['angsuran_percent'] ?>% | Rp. <?php echo number_format($dbangsuran['angsuran_36bulan'], 0, ',', '.'); ?> | 36 x</option>
            <option value="Rp. <?php echo number_format($dbangsuran['angsuran_48bulan'], 0, ',', '.'); ?> 48x"><?= $dbangsuran['angsuran_percent'] ?>% | Rp. <?php echo number_format($dbangsuran['angsuran_48bulan'], 0, ',', '.'); ?> | 48 x</option>
            <option value="Rp. <?php echo number_format($dbangsuran['angsuran_60bulan'], 0, ',', '.'); ?> 60x"><?= $dbangsuran['angsuran_percent'] ?>% | Rp. <?php echo number_format($dbangsuran['angsuran_60bulan'], 0, ',', '.'); ?> | 60 x</option>
          <?php endforeach; ?>
          </select>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="mb-2">
              <label class="form-label">Telp</label>
              <input type="text" class="form-control border-0 bg-light rounded-3" name="u_telp" id="u_telp" placeholder="08xxxxxxxxxx" required>
            </div>
          </div>
          <div class="col-sm">
            <div class="mb-2">
              <label class="form-label">Telp WhatsApp</label>
              <input type="text" class="form-control border-0 bg-light rounded-3" name="u_whatsapp" id="u_whatsapp" placeholder="08xxxxxxxxxx" required>
            </div>
          </div>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea class="form-control border-0 bg-light rounded-3" name="u_alamat" id="u_alamat" rows="2" required></textarea>
        </div>

        
        <a href="<?= BASEURL; ?>/" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1 hide-mobile">Kembali</a>
        <input class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1 hide-desktop" type="submit" name="checkout" value="Checkout"/>
        <a href="<?= BASEURL; ?>/" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1 hide-desktop">Kembali</a>
        <input class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1 hide-mobile" type="submit" name="checkout" value="Checkout"/>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
function ShowData() {
  var checkBox = document.getElementById("showdata");
  var name = document.getElementById("u_name");
  var telp = document.getElementById("u_telp");
  var whatsapp = document.getElementById("u_whatsapp");
  var alamat = document.getElementById("u_alamat");

  if (checkBox.checked == true){
    name.value = "<?= $data['dbUserCode']['u_name']; ?>";
    telp.value = "<?= $data['dbUserCode']['u_telp']; ?>";
    whatsapp.value = "<?= $data['dbUserCode']['u_whatsapp']; ?>";
    alamat.value = "<?= $data['dbUserCode']['u_alamat']; ?>";
  } else {
    name.value = "";
    telp.value = "";
    whatsapp.value = "";
    alamat.value = "";
  }
}
</script>