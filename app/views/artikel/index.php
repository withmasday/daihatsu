<div class="container-fluid mt-5 pt-5">
    <h5 class="mb-3">Artikel</h5>
    <div class="row">
        <?php foreach ($data['dbArtikel'] as $dbArtikel): ?>
            <div class="col-sm-3 mb-3">
                <div class="card w-100 h-100">
                    <img src="<?= BASEURL; ?>/img/<?= $dbArtikel['artikel_image']; ?>" class="card-img-topar" alt="...">
                    <div class="card-body">
                        <p class="ctext text-center"><?= $dbArtikel['artikel_name']; ?></p>
                        <a href="<?= BASEURL; ?>/artikel/read/<?= $dbArtikel['artikel_code']; ?>" class="btn btn-light2 w-100 d-block">
                            <i class="bi bi-book-fill me-2"></i> BACA SELENGKAPNYA
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

