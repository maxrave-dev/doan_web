<div class="tab-content">
	<div class="tab-pane in active text-center" id="grid">
        <?php
			if(isset($data) and $data != NULL){ ?>
            <div class="row">
                <?php
				foreach ($data as  $value) {		
		?>

            <div class="col-xs-12 col-sm-6 col-lg-3 col-md-4 justify-content-center lr-slider" align="center">
                <div class="lr-item">
                    <div class="item">
                        <div class="card shadow px-3 pt-3">
                            <div class="img card-img-top product-img">
                                <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="/public/<?= $value['HinhAnh1'] ?>" class="w-100"></a>
                            </div>
                            <div class="card-body">
                                <div class="info">
                                    <a class="title" href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a>
                                    <span class="price">
                                                    <strong><?= number_format($value['DonGia']) ?></strong>
                                                </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		<?php } ?>
            </div>
            <?php }else{
			echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>
	</div>
</div>