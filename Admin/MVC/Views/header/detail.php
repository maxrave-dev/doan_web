<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if(isset($data) and $data != null) { ?>
        <h2>Id: <?= $data['id'] ?></h2>
        <h2>Nội dung: <?= $data['noidung'] ?></h2>
        <h2>Mã sản phẩm: <?= $data['MaSP'] ?></h2>
    <?php } ?>
</table>
