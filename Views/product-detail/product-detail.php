<!-- pages-title-start -->
<?php if ($data != null) { ?>
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <ul class="text-left">
                            <li><a href="?act=home">Trang chủ</a></li>
                            <li><span> // </span><a href="?act=shop">Cửa Hàng</a></li>
                            <li><span> // </span><?= $data['TenSP'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-8 product-detail product-description">
                <div class="row">
                    <div class="slider-container pb-5">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php if ($data['HinhAnh1'] != null) { ?>
                                    <div class="carousel-item active slide py-2 px-2" data-bs-interval="2000">
                                        <img src="public/<?= $data['HinhAnh1'] ?>" class="d-block w-50 mx-auto" alt="...">
                                    </div>
                                <?php } ?>
                                   <?php if ($data['HinhAnh2'] != null) { ?>
                                        <div class="carousel-item slide py-2 px-2" data-bs-interval="2000">
                                            <img src="public/<?= $data['HinhAnh2'] ?>" class="d-block w-50 mx-auto" alt="...">
                                        </div>
                                    <?php } ?>
                                    <?php if ($data['HinhAnh3'] != null) { ?>
                                        <div class="carousel-item slide py-2 px-2" data-bs-interval="2000">
                                            <img src="public/<?= $data['HinhAnh3'] ?>" class="d-block w-50 mx-auto" alt="...">
                                        </div>
                                    <?php } ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row center-text margin-text-title">
                    <h2><?= $data['TenSP'] ?></h2>
                </div>
                <div class="row">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                        <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                        <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                        <i class="fa-solid fa-star" style="color: #fbff00;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                    </div>
                </div>
                <div class="row">
                    <p class="h4 text-price">Giá: <?=number_format($data['DonGia'])?> VNĐ</p>
                </div>
                <div class="list-btn">
                    <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">Thêm vào giỏ</a>
                </div>
                <?php if ($data['MaDM'] == 1) { ?>
                    <p><?= $data['MoTa'] ?></p>
                <?php }?>
            </div>
            <div class="col-12 col-lg-4 product-detail product-details">
                <h2>Chi tiết sản phẩm</h2>
                <div class="tb">
                    <h5>Thông số kỹ thuật</h5>
                    <ul>
                        <li>
                            <span>Màn hình</span>
                            <div><?= $data['ManHinh'] ?></div>
                        </li>
                        <li>
                            <span>Chip</span>
                            <div><?= $data['CPU'] ?></div>
                        </li>
                        <li>
                            <span>Ram</span>
                            <div><?= $data['Ram'] ?></div>
                        </li>
                        <li>
                            <span>Bộ nhớ trong</span>
                            <div><?= $data['Rom'] ?></div>
                        </li>
                        <li>
                            <span>Pin</span>
                            <div><?= $data['Pin'] ?></div>
                        </li>
                        <li>
                            <span>Camera trước</span>
                            <div><?= $data['CamTruoc'] ?></div>
                        </li>
                        <li>
                            <span>Camera sau</span>
                            <div><?= $data['CamSau'] ?></div>
                        </li>
                        <li>
                            <span>Thẻ nhớ</span>
                            <div><?= $data['SDCard'] ?></div>
                        </li>
                        <li>
                            <span>Hệ điều hành</span>
                            <div><?= $data['HDH'] ?></div>
                        </li>
                    </ul>
                </div>
                <div class="--><?php if ($data['MaDM'] == 1) {
                            echo 'info-reviews review-text tab-pane container in';
                        } else {
                            echo 'info-reviews moreinfo tab-pane container in active';
                        } ?>" id="reviews">
                </div>
            </div>
        </div>
    </div>
    <section class="single-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($data_lq as $row) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-product">
                            <div class="product-f">
                                <a href="?act=detail&id=<?= $row['MaSP'] ?>"><img src="public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-products" /></a>
                                <div class="actions-btn">
                                    <a href="?act=detail&id=<?= $row['MaSP'] ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="" data-toggle="modal" ><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-dsc">
                                <p><a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenSP'] ?></a></p>
                                <span><?= number_format($row['DonGia']) ?> VNĐ</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- single product end -->
            </div>
        </div>
    </section>
<?php } else {
    require_once("Views/error-404.php");
} ?>
<!-- related-products section end -->
<!-- quick view start -->
<?php
require_once("Views/quickview.php")
?>
<!-- quick view end -->