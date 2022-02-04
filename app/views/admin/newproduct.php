<div class="my-5 pt-5 container-fluid">
    <div class="row">
        <div class="col-sm-3 mb-2">
            <h4 class="mb-3 pt-2">Tambah Data Produk</h4>
        </div>
    </div>

    <ul class="nav nav-pills mb-3 d-none" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li>
    </ul>

    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4 mb-2">
                <div class="mb-2">
                    <label class="form-label pt-1">Nama</label>
                    <input type="text" class="form-control rounded-3" name="car_name" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control rounded-3" name="car_price" required>
                </div>
                <div class="mb-2">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" name="car_image">
                </div>
                <div class="mb-2">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" name="car_type">
                        <option value="" selected>Open this select menu</option>
                    <?php foreach($data['dbCategory'] as $dbcategory): ?>
                        <option value="<?= $dbcategory['category_code']; ?>"><?= $dbcategory['category_name']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="mb-2">
                    <label class="form-label">Detail Produk</label>
                    <textarea class="form-control rounded-3" name="car_detail" rows="10" required></textarea>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label">Percent Angsuran I</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_percent" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">TDP Angsuran I</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_tdp" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran I | 12 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_12bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran I | 24 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_24bulan" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label">Angsuran I | 36 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_36bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran I | 48 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_48bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran I | 60 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsuranone_60bulan" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <a href="<?= BASEURL; ?>/admin/product" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1">KEMBALI</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" onclick="showSlide('#pills-profile')">SELANJUTNYA</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label">Percent Angsuran II</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_percent" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">TDP Angsuran II</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_tdp" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran II | 12 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_12bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran II | 24 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_24bulan" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label">Angsuran II | 36 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_36bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran II | 48 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_48bulan" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Angsuran II | 60 Bulan</label>
                                    <input type="text" class="form-control rounded-3" name="angsurantwo_60bulan" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1" onclick="showSlide('#pills-home')">KEMBALI</button>
                            </div>
                            <div class="col-sm-6">
                                <input type="submit" name="newproduct" value="CREATE" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
function showSlide(target){
    $('#pills-tab button[data-bs-target="'+ target +'"]').tab('show');
}
</script>