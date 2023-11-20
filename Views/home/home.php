<div class="top-link">
    <span class="pulse"></span> <p><strong> <?= $data_header[0]['noidung'] ?></strong></p> <a class="btn btn-danger" href="?act=detail&id=<?= $data_header[0]['MaSP'] ?>" style="color: white; font-size: 11px">Xem ngay</a>
</div>
<!-- banner-start -->
<?php
require_once("banner.php")
?>
<!-- banner-end -->
<!--Flash sale start-->
<div class="section-padding extra-padding-top">
    <div class="container">
        <div class="row g-0">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="section-title text-center">
                    <h2>F<i class="fa-solid fa-bolt fa-bounce"></i>ASH SALE ONLINE</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-loaded owl-drag owl-theme lr-slider">
            <?php
                foreach ($flash_sale as $key => $value) {
                    ?>
                        <div class="lr-item">
                            <div class="item">
                                <div class="img">
                                    <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="/public/<?= $value['HinhAnh1'] ?>" class="w-100"></a>
                                </div>
                                <div class="info">
                                    <a class="title" href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a>
                                    <span class="price">
                                        <strong><?= number_format($value['DonGia']) ?></strong>
                                        <?php
                                            if ($value['DonGia'] - 500000 > 0) { ?>
                                                <strike><?= number_format($value['DonGia'] - 500000)?> VNĐ</strike>
                                            <?php }
                                            else {
                                                ?>
                                                <strike>0 VNĐ</strike>
                                                <?php
                                            }
                                        ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<!--Flash sale end-->
<!-- tab-products section start -->
<div class="tab-products single-products section-padding extra-padding-top">
    <div class="container">
        <div class="row g-0">
            <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">Tất cả</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".phone">Điện thoại</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".oplung">Ốp lưng</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".phukien">Phụ kiện</button>
            </div>
            <div class="collection-list mt-4 row gx-0 gy-3">
                <?php
                    foreach ($all_product as $key => $value) {
                        $type = "";
                        switch ($value['MaDM']) {
                            case 1:
                                $type = "phone";
                                break;
                            case 2:
                                $type = "oplung";
                                break;
                            case 3:
                                $type = "phukien";
                                break;
                        }
                        ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 <?= $type?>">
                            <div class="special-img position-relative overflow-hidden">
                                <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="/public/<?= $value['HinhAnh1'] ?>" class="w-100"></a>
                            </div>
                            <div class="text-center">
                                <p class="text-capitalize my-1 text-title"><?= $value['TenSP'] ?></p>
                                <span class="fw-bold text-price"><?= number_format($value['DonGia']) ?> VNĐ</span>
                            </div>
                        </div>
<!--                        <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top --><?php //= $type?><!--">-->
<!--                            <div class="single-product">-->
<!--                                <div class="product-f">-->
<!--                                    <a href="?act=detail&id=--><?php //= $value['MaSP'] ?><!--"><img src="/public/--><?php //= $value['HinhAnh1'] ?><!--" alt="Product Title" class="img-products" /></a>-->
<!--                                    <div class="actions-btn">-->
<!--                                        <a href="?act=detail&id=--><?php //= $value['MaSP'] ?><!--"><i class="mdi mdi-cart"></i></a>-->
<!--                                        <a href="?act=detail&id=--><?php //= $value['MaSP'] ?><!--" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="product-dsc">-->
<!--                                    <p><a href="?act=detail&id=--><?php //= $value['MaSP'] ?><!--">--><?php //= $value['TenSP'] ?><!--</a></p>-->
<!--                                    <span>--><?php //= number_format($value['DonGia']) ?><!-- VNĐ</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- tab-products section end -->
<!-- collection section start -->
<section class="collection-area collection-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="single-colect banner collect-one">
                    <a href="?act=detail&id=<?= $data_random['0']['MaSP'] ?>"><img src="/public/<?= $data_random['0']['HinhAnh1'] ?>" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="colect-text ">
                    <h4><a href="#"><?= $data_random['0']['TenSP'] ?></a></h4>
                    <h5>Giá: <?= number_format($data_random['0']['DonGia']) ?> VNĐ</h5>
                    <a href="?act=detail&id=<?= $data_random['0']['MaSP'] ?>">Mua ngay <i class="fa-solid fa-arrow-alt-circle-right"></i></a>
                </div>
                <div class="collect-img banner margin single-colect">
                    <a href="#"><img src="/public/<?= $data_random['0']['HinhAnh2'] ?>" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="collect-img banner single-colect">
                    <a href="?act=detail&id=<?= $data_random['1']['MaSP'] ?>"><img src="/public/<?= $data_random['1']['HinhAnh1'] ?>" alt="" /></a>
                </div>
                <div class="colect-text ">
                    <h4><a href="?act=detail&id=<?= $data_random['1']['MaSP'] ?>"><?= $data_random['1']['TenSP'] ?></a></h4>
                    <h5>Giá: <?= number_format($data_random['1']['DonGia']) ?> VNĐ</h5>
                    <a href="?act=detail&id=<?= $data_random['1']['MaSP'] ?>">Mua ngay <i class="fa-solid fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section end -->
<!-- featured-products section start -->
<section class="single-products  products-two section-padding extra-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
                    <h2>Sản phẩm mới nhất</h2>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <ul class="load-list load-list-one">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <li>
                        <div class="row text-center">
                            <?php
                            if ($data_arr[$i] != null) {
                                foreach ($data_arr[$i] as  $row) { ?>
                                    <!-- single product end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
                                        <div class="single-product">
                                            <div class="product-f">
                                                <a href="?act=detail&id=<?= $row['MaSP'] ?>"><img src="/public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="?act=detail&id=<?= $row['MaSP'] ?>"><i class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="?act=detail&id=<?= $row['MaSP'] ?>" data-toggle="modal" ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenSP'] ?></a></p>
                                                <span><?= number_format($row['DonGia']) ?> VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                            <?php }
                            } ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <button id="load-more-one">Tải thêm</button>
        </div>
    </div>
</section>
<!-- featured-products section end -->
<!-- quick view start -->
<?php
include_once("Views/quickview.php");
?>
<!-- quick view end -->