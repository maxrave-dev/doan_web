<div class="tab-content">
	<div class="tab-pane in active text-center" id="grid">
        <?php
			if(isset($data) and $data != NULL){ ?>
            <div class="row">
                <?php
				foreach ($data as  $value) {		
		?>

            <div class="col-xs-12 col-sm-6 col-lg-4 col-md-6 justify-content-center lr-slider">
                <div class="lr-item">
                    <div class="item">
                        <div class="card shadow">
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
<!--			<div class="single-product">-->
<!--				<div class="product-f">-->
<!--					<a href="?act=detail&id=--><?php //=$value['MaSP']?><!--"><img src="public/--><?php //=$value['HinhAnh1']?><!--" alt="Product Title" class="img-products"/></a>-->
<!--					<div class="actions-btn">-->
<!--						<a href="?act=detail&id=--><?php //=$value['MaSP']?><!--"><i class="fa-solid fa-cart-shopping"></i></a>-->
<!--						<a href="?act=detail&id=--><?php //=$value['MaSP']?><!--" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>		-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="product-dsc">-->
<!--					<p><a href="?act=detail&id=--><?php //=$value['MaSP']?><!--">--><?php //=$value['TenSP']?><!--</a></p>-->
<!---->
<!--					<span>--><?php //=number_format($value['DonGia'])?><!-- VNĐ</span>-->
<!--				</div>-->
<!--			</div>-->
            </div>

		<?php } ?>
            </div>
            <?php }else{
			echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>
		<!-- single product end -->
	</div>
</div>