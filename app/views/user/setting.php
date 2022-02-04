<div class="container-fluid mt-5 pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-3 rounded-3 border">
            <h4 class="my-4">
                <i class="bi bi-gear-fill text-red me-2"></i> Pengaturan Akun
            </h4>
            <form method="post">
                <div class="mb-2">
                    <label class="form-label">Nama</label>
                    <input type="text" value="<?= $data['dbUserData']['u_name']; ?>" class="form-control border-0 bg-light rounded-3" name="u_name" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Telp</label>
                    <input type="text" value="<?= $data['dbUserData']['u_telp']; ?>" class="form-control border-0 bg-light rounded-3" name="u_telp" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Telp Whatsapp</label>
                    <input type="text" value="<?= $data['dbUserData']['u_whatsapp']; ?>" class="form-control border-0 bg-light rounded-3" name="u_whatsapp" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control border-0 bg-light rounded-3" name="u_alamat" rows="2" required><?= $data['dbUserData']['u_alamat']; ?></textarea>
                </div>
                <input class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" type="submit" name="update" value="Update"/>
                <a href="<?= BASEURL; ?>/" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1 mb-3">Kembali</a>
            </form>
        </div>
    </div>
</div>