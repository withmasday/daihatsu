<div class="my-5 pt-5 container-fluid">
    <div class="row">
        <div class="col-sm-2 mb-2">
            <h4 class="mb-3 pt-2">Edit Data Produk</h4>
        </div>
        <div class="col-sm-8 mb-2"></div>
        <div class="col-sm-2 mb-2">
            <a href="<?= BASEURL; ?>/admin/delete/<?= $data['dbProductCode']["car_code"]; ?>" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1">
                <i class="bi bi-trash me-2"></i>HAPUS
            </a>
        </div>
    </div>

    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4 mb-2">
                <img src="<?= BASEURL; ?>/img/<?= $data['dbProductCode']["car_image"]; ?>" class="w-100"/>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="mb-2">
                    <label class="form-label pt-1">Nama</label>
                    <input type="text" value="<?= $data['dbProductCode']["car_name"]; ?>" class="form-control rounded-3" name="car_name" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Harga</label>
                    <input type="text" value="<?= $data['dbProductCode']["car_price"]; ?>" class="form-control rounded-3" name="car_price" required>
                </div>
                <div class="mb-2">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" name="car_image">
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="mb-2">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" name="car_type">
                        <option value="<?= $data['dbProductCode']["car_type"]; ?>" selected>Open this select menu</option>
                    <?php foreach($data['dbCategory'] as $dbcategory): ?>
                        <option value="<?= $dbcategory['category_code']; ?>"><?= $dbcategory['category_name']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Detail Produk</label>
                    <textarea class="form-control rounded-3" name="car_detail" rows="4" required><?= $data['dbProductCode']["car_detail"]; ?></textarea>
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <a href="<?= BASEURL; ?>/admin/product" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1">KEMBALI</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="updatecar" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" value="UPDATE"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <hr class="w-25 mx-auto my-5"/>
    
        <div class="row">
            <form class="col-sm-6 mb-5" method="post">
                <?php foreach ($data['dbAngsuranOne'] as $dbAngsuranOne): ?>
                    <h4 class="mb-3">Data Angsuran I</h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Percent</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_percent"]; ?>" class="form-control rounded-3" name="angsuranone_percent" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">TDP</label>
                                <input type="text" value="<?= $dbAngsuranOne["tdp"]; ?>" class="form-control rounded-3" name="angsuranone_tdp" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 12 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_12bulan"]; ?>" class="form-control rounded-3" name="angsuranone_12bulan" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 24 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_24bulan"]; ?>" class="form-control rounded-3" name="angsuranone_24bulan" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 36 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_36bulan"]; ?>" class="form-control rounded-3" name="angsuranone_36bulan" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 48 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_48bulan"]; ?>" class="form-control rounded-3" name="angsuranone_48bulan" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 60 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranOne["angsuran_60bulan"]; ?>" class="form-control rounded-3" name="angsuranone_60bulan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 d-flex justify-content-end">
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1">KEMBALI</a>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="angsuranone" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" value="UPDATE"/>
                        </div>
                    </div>
                <?php endforeach; ?>
            </form>

            <form class="col-sm-6 border-start mb-5" id="border-startar" method="post">
                <?php foreach ($data['dbAngsuranTwo'] as $dbAngsuranTwo): ?>
                    <h4 class="mb-3">Data Angsuran II</h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Percent</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_percent"]; ?>" class="form-control rounded-3" name="angsurantwo_percent" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">TDP</label>
                                <input type="text" value="<?= $dbAngsuranTwo["tdp"]; ?>" class="form-control rounded-3" name="angsurantwo_tdp" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 12 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_12bulan"]; ?>" class="form-control rounded-3" name="angsurantwo_12bulan" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 24 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_24bulan"]; ?>" class="form-control rounded-3" name="angsurantwo_24bulan" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 36 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_36bulan"]; ?>" class="form-control rounded-3" name="angsurantwo_36bulan" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 48 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_48bulan"]; ?>" class="form-control rounded-3" name="angsurantwo_48bulan" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label pt-1">Angsuran 60 Bulan</label>
                                <input type="text" value="<?= $dbAngsuranTwo["angsuran_60bulan"]; ?>" class="form-control rounded-3" name="angsurantwo_60bulan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 d-flex justify-content-end">
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1">KEMBALI</a>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="angsurantwo" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" value="UPDATE"/>
                        </div>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </form>
</div>
