<div class="my-5 pt-5 container-fluid">
    <div class="row">
        <div class="col-sm-2 mb-2">
            <h4 class="mb-3 pt-2">Data Article</h4>
        </div>
        <div class="col-sm-8 mb-2"></div>
        <div class="col-sm-2 mb-2">
            <button type="button" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1" id="newarticle">NEW ARTICLE</button>
        </div>
    </div>

    <div class="row">
        <?php foreach ($data['dbArtikel'] as $dbArtikel): ?>
            <div class="col-sm-3 mb-3" onclick="dataArticle('<?= $dbArtikel['artikel_code']; ?>')" style="cursor: pointer;">
                <div class="card w-100">
                    <img src="<?= BASEURL; ?>/img/<?= $dbArtikel['artikel_image']; ?>" class="card-img-topar" alt="...">
                    <div class="card-body">
                        <p class="ctext text-center"><?= $dbArtikel['artikel_name']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="modal fade" id="datauser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body" method="post" enctype="multipart/form-data">
                    <a id="deletearticle" class="btn btn-outline-red shadow-sm rounded-3 mb-3 w-25 py-2 my-1">
                        <i class="bi bi-trash me-2"></i>HAPUS
                    </a>
                    <div class="mb-2">
                        <img id="articleimg" class="w-100 rounded-3 mb-2"/>
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" name="article_image">
                        <input class="form-control d-none" type="text" name="article_code" id="articlecode">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Judul Artikel</label>
                        <input class="form-control" type="text" name="article_name" id="articlename">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Isi Artikel</label>
                        <textarea class="form-control rounded-3" name="article_value" id="articlevalue" rows="10" required></textarea>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1" data-bs-dismiss="modal">KEMBALI</button>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="updatearticle" value="UPDATE" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addnewarticle" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Data Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" name="article_image">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Judul Artikel</label>
                        <input class="form-control" type="text" name="article_name" id="articlename">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Isi Artikel</label>
                        <textarea class="form-control rounded-3" name="article_value" id="articlevalue" rows="10" required></textarea>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-outline-red shadow-sm rounded-3 w-100 py-2 my-1" data-bs-dismiss="modal">KEMBALI</button>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="createarticle" value="CREATE" class="btn btn-red shadow-sm rounded-3 w-100 py-2 my-1"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= BASEURL; ?>/js/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function dataArticle(article_code) {   
    data = {
        article_code: article_code,
        show: true
    };

    var datauser = new bootstrap.Modal(document.getElementById('datauser'), {
        keyboard: false
    });

    datauser.show();

    $.post('<?= BASEURL; ?>/admin/article/data', data).done(function(row) {
        $("#articleimg").attr("src", "<?= BASEURL; ?>/img/"+row['artikel_image']);
        $("#articlename").val(row['artikel_name']);
        $("#articlevalue").val(row['artikel_value']);
        $("#articlecode").val(row['artikel_code']);

        $("#deletearticle").click(function(){
            $.post('<?= BASEURL; ?>/admin/article/delete', data).done(function(row){
                swal("Success!", "Pesanan Telah Di Hapus!", "success");
                setTimeout(function(){
                    location.reload();
                },3000); 
            });
        });
    });
}

$("#newarticle").click(function(){
    $('#datauser').modal('hide');
    $('#addnewarticle').modal('show');
});
</script>