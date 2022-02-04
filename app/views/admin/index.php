<div class="my-5 pt-5 container-fluid">
    <h5 class="mb-3">Pesanan Client</h5>
    <div class="row">
        <div class="col-sm-2 mb-2">
            <input type="text" class="form-control w-100" id="searchtable" placeholder="Pencarian"/>
        </div>
        <div class="col-sm-2 mb-2">
            <select class="form-select w-100" aria-label="Default select example" id="filtertable">
                <option selected>Filter</option>
                <option value="PENDING">PENDING</option>
                <option value="PROCESS">PROCESS</option>
            </select>
        </div>
        <div class="col-sm-2 mb-2">
            <button type="button" class="btn btn-red w-100 allxls-btn">
                <i class="bi bi-file-earmark-spreadsheet-fill me-2"></i>
                EXCEL
            </button>
        </div>
        <div class="col-sm-4 mb-2"></div>
        <div class="col-sm-2 mb-2">
            <h6 class="w-100 p-2 shadow-sm rounded-3 border">
                Total Pesanan
                <span class="float-end me-2"><?php echo count($data['dbAllOrder']); ?></span>
            </h6>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless table-hover table2excel_with_colors" id="table">
            <thead class="bg-danger2 text-white">
                <tr>
                    <th scope="col" class="text-center">Pemesan</th>
                    <th scope="col" class="text-center">Nama Mobil</th>
                    <th scope="col" class="text-center">Pembayaran</th>
                    <th scope="col" class="text-center">Telp</th>
                    <th scope="col" class="text-center">Whatsapp</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['dbAllOrder'] as $dbAllOrder): ?>
                <tr onclick="showOrder('<?= $dbAllOrder['car_code']; ?>', '<?= $dbAllOrder['u_code']; ?>')">
                    <td class="text-center"><?= $dbAllOrder['u_name']; ?></td>
                    <td class="text-center"><?= $dbAllOrder['car_name']; ?></td>
                    <td class="text-center"><?= $dbAllOrder['pembayaran']; ?></td>
                    <td class="text-center"><?= $dbAllOrder['u_telp']; ?></td>
                    <td class="text-center"><?= $dbAllOrder['u_whatsapp']; ?></td>
                    <td class="text-center"><?= $dbAllOrder['order_date']; ?></td>
                    <td class="text-center">
                        <?php
                            if ($dbAllOrder['order_status'] == 1) {
                                echo 'PROCESS';
                            } else {
                                echo 'PENDING';
                            }
                        ?>
                    </td>
                    <td class="text-center">
                        <button type="button" onclick="verifyOrder('<?= $dbAllOrder['car_code']; ?>', '<?= $dbAllOrder['u_code']; ?>')" class="btn btn-red verif">VERIFIKASI</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="datauser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pesanan Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label class="form-label">Nama Pemesan</label>
                    <input class="form-control" type="text" id="uname" readonly>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama Mobil</label>
                    <input class="form-control" type="text" id="carname" readonly>
                </div>
                <div class="mb-2">
                    <label class="form-label">Pembayaran</label>
                    <input class="form-control" type="text" id="pembayaran" readonly>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-2">
                            <label class="form-label">Date</label>
                            <input class="form-control" type="text" id="date" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <label class="form-label">Status</label>
                            <input class="form-control" type="text" id="status" readonly>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Alamat</label>
                    <input class="form-control" type="text" id="alamat" readonly>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="my-2">
                            <a class="btn rounded-3 border w-100" id="telephone">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <div id="ntelephone" class="d-inline-block"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="my-2">
                            <a class="btn rounded-3 border w-100" id="whatsapp">
                                <i class="bi bi-whatsapp me-2"></i>
                                <div id="nwhatsapp" class="d-inline-block"></div>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-50" data-bs-dismiss="modal">Kembali</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= BASEURL; ?>/js/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function verifyOrder(car_code, u_code) {   
    data = {
        car_code: car_code,
        u_code: u_code,
        verify: true
    };

    $.post('<?= BASEURL; ?>/admin/verify', data).done(function(response) {
        swal("Success!", "Pesanan Telah Di Verifikasi!", "success");
        location.reload(); 
    });
}

function showOrder(car_code, u_code) {   
    data = {
        car_code: car_code,
        u_code: u_code,
        show: true
    };
    var datauser = new bootstrap.Modal(document.getElementById('datauser'), {
        keyboard: false
    });

    $.post('<?= BASEURL; ?>/admin/verify', data).done(function(row) {
        console.log(row);
        $("#uname").val(row['u_name']);
        $("#carname").val(row['car_name']);
        $("#pembayaran").val(row['pembayaran']);
        $("#date").val(row['order_date']);
        $("#alamat").val(row['u_alamat']);
        $("#nwhatsapp").text(row['u_whatsapp']);
        $("#ntelephone").text(row['u_telp']);

        const phone = row['u_telp'].substr(1,15);
        $("#whatsapp").attr("href", "https://api.whatsapp.com/send?phone=62"+ phone);
        $("#telephone").attr("href", "tel:"+row['u_telp']);

        if (row['order_status'] == 1) {
            $("#status").val("PROCESS");
        } else {
            $("#status").val("PENDING");
        }

        datauser.show();
    });
}
</script>
