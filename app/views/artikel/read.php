<div class="container-fluid mt-5 pt-5">
    <div class="row">

        <div class="col-sm-9 mb-3">
            <h1 class="mb-3"><?= $data['dbArtikelByCode']['artikel_name']; ?></h1>

            <img src="<?= BASEURL; ?>/img/<?= $data['dbArtikelByCode']['artikel_image']; ?>" class="rounded-3 w-100 mb-3"/>
            <div class="row">
                <div class="col-7 mb-3 text-start">
                    <div class="artikel-info mt-2 d-inline-block">
                        <i class="bi bi-calendar me-2"></i>
                        <?= $data['dbArtikelByCode']['artikel_date']; ?>
                    </div>
                    <div class="artikel-info mt-2 d-inline-block ms-3">
                        <i class="bi bi-person-circle me-2"></i>
                        <?= $data['dbArtikelByCode']['artikel_by']; ?>
                    </div>
                </div>
                <div class="col-5 mb-3 text-end">
                    <input type="text" class="d-none" id="clipboard" value="<?= BASEURL; ?>/artikel/read/<?= $data['dbArtikelByCode']['artikel_code']; ?>"/>
                    <a onclick="clipboard()" class="btn btn-light2 px-4">
                        <i class="bi bi-share-fill me-2"></i> SHARE
                    </a>
                </div>
            </div>
            <p class="artikel w-100">
                <?php 
                    $string = $data['dbArtikelByCode']['artikel_value'];
                    $newstring = trim(preg_replace('/\s\s+/', '<br><br>&#8287;&#8287;&#8287;&#8287;&#8287;&#8287;&#8287;&#8287;', $string));
                    echo $newstring;
                ?>
            </p>
        </div>

        <div class="col-sm-3 mb-3 border-start" id="border-startar">
            <h5 class="my-2">Baca Juga</h5>
            <?php foreach ($data['dbArtikel'] as $dbArtikel): ?>
            <a href="<?= BASEURL; ?>/artikel/read/<?= $dbArtikel['artikel_code']; ?>" class="news-item mb-2 d-inline-block">
                <img src="<?= BASEURL; ?>/img/<?= $dbArtikel['artikel_image']; ?>" class="news-image"/>
                <div class="news-name">
                    <?php
                        echo substr_replace($dbArtikel['artikel_name'], '', 90);
                    ?>
                </div>
                <div class="text-center">
                    <hr class="w-25 hide-mobile"/>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script type="text/javascript">
function clipboard(){
    var copyText = document.getElementById("clipboard");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
}
</script>