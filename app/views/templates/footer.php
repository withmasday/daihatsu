<footer class="mt-5 pt-3 pb-5 bg-light">
   <div class="container">
      <div class="row">
         <div class="col-sm-1"></div>
         <div class="col-sm-2">
            <div class="h-footer py-3">Daihatsu</div>
            <a href="<?= BASEURL; ?>/gallery" class="list-footer">Gallery Delivery</a>
            <a href="<?= BASEURL; ?>/about" class="list-footer">Tentang Kami</a>
            
            <div class="h-footer py-3">DAIHATSU CIPUTAT</div>
            <a href="https://www.google.com/maps?ll=-6.334352,106.748606&z=14&t=m&hl=en&gl=ID&mapclient=embed&cid=5595520638188408689" class="list-footer">Jl. RE Martadinata No.03 Ciputat Tangerang</a>
         </div>
         <div class="col-sm">
            <div class="h-footer py-3">Produk</div>
            <?php foreach($data['dbCategory'] as $dbcategory): ?>
                <a href="<?= BASEURL; ?>/product/type/<?= $dbcategory['category_code']; ?>" class="list-footer">
                    <?= $dbcategory['category_name']; ?>
                </a>
            <?php endforeach; ?>
         </div>
         <div class="col-sm">
            <div class="h-footer py-3">Kontak</div>
            <div class="contact">
               <a href="https://api.whatsapp.com/send?phone=6281288140134" class="list-footer">
                  <i class="bi bi-whatsapp float-start me-2"></i>+62 812 881 40134
               </a>
               <a href="tel:081288140134" class="list-footer">
                  <i class="bi bi-telephone-fill float-start me-2"></i>+62 812 881 40134
               </a>
               <a href="mailto:daihatsubogor88@gmail.com" class="list-footer">
                  <i class="bi bi-envelope-fill float-start me-2"></i>daihatsubogor88...
               </a>
            </div>
         </div>
         <div class="col-sm-4 py-4 flogo">
            <img src="<?= BASEURL; ?>/img/slogo.png"/>
         </div>
         <div class="col-sm-1"></div>
      </div>
   </div>
</footer>
<script src="<?= BASEURL; ?>/js/jquery.js"></script>
<script src="<?= BASEURL; ?>/js/jquery.table2excel.js"></script>
<script src="<?= BASEURL; ?>/js/core.table2excel.js"></script>
<script src="<?= BASEURL; ?>/js/sweetalert.min.js"></script>
<script src="<?= BASEURL; ?>/js/app.js"></script>
<?php Flasher::flash(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

