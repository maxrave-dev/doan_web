<header class="header-one header-two">
    <div class="header-top-two">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
<!--                            <div class="middel-top">-->
<!--                                <div class="widthfull">-->
<!--                                    <form action="?act=shop" method="post">-->
<!--                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>-->
<!--                                        <input type="text" placeholder="Tìm kiếm..." name="keyword"/>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->

                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-8 col-8">
                            <div class="middel-top right floatright">
                                <div class="right floatright">
                                    <p><i class="fa-regular fa-clock"></i> T2 - CN : 08:00-19:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4">
                            <div class="middel-top right floatright">
                                <ul class="right floatright">
                                    <li>
                                        <a><i class="fa-regular fa-user"></i></a>
                                        <ul>
                                            <?php  if(isset($_SESSION['login'])){ ?>
                                                <li><b>Chào <?=$_SESSION['login']['Ho']?> <?=$_SESSION['login']['Ten']?></b></li>
                                                <li><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                                <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                                <?php
                                                if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                                    <li><a href="admin/?mod=login">Trang quản lý</a></li>
                                                <?php }}else{ ?>
                                                <li><b>Khách hàng</b></li>
                                                <li><a href="?act=taikhoan">Đăng nhập</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="?act=home"><img src="/public/img/logo.png" alt="Maxphone" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="?act=home">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?act=shop">Cửa Hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?act=checkout">Thanh Toán</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="?act=about">Giới thiệu</a></li>
                            <li class="nav-item"><a class="nav-link" href="?act=contact">Liên hệ</a></li>
                            <li class="nav-item">
                                <div class="cart-itmes align-items-center">
                                    <?php
                                    $soluong = 0;
                                    $thanhtien = 0;
                                    if(isset($_SESSION['sanpham'])){
                                        foreach ($_SESSION['sanpham'] as $value) {
                                            $soluong +=1;
                                            $thanhtien +=$value['ThanhTien'];
                                        }}
                                    ?>
                                    <a class="cart-itme-a center nav-link" href="?act=cart">Giỏ hàng</a>

                                    <!--                                            --><?php //=$soluong?><!-- SP : <strong>--><?php //=number_format($thanhtien)?><!-- VNĐ</strong>-->
                                    <div class="cartdrop">
                                        <?php if(isset($_SESSION['sanpham'])){
                                            foreach ($_SESSION['sanpham'] as $value) { ?>
                                                <div class="sin-itme clearfix">
                                                    <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="fa-solid fa-x" title="Remove this product"></i></a>
                                                    <a class="cart-img" href="?act=cart"><img src="public/<?=$value['HinhAnh1']?>" alt="" /></a>
                                                    <div class="menu-cart-text">
                                                        <a href="?act=detail&id=<?=$value['MaSP']?>">
                                                            <h5><?=$value['TenSP']?></h5>
                                                        </a>
                                                        <b>Số lượng: <?=$value['SoLuong']?></b>
                                                        <strong><?=number_format($value['ThanhTien'])?> VNĐ</strong>
                                                    </div>
                                                </div>
                                            <?php }} ?>
                                        <div class="total">
                                            <span>Tổng <strong>= <?=number_format($thanhtien)?> VNĐ</strong></span>
                                        </div>
                                        <a class="goto" href="index.php?act=cart">Đến giỏ hàng</a>
                                        <a class="out-menu" href="index.php?act=checkout">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <form class="d-flex justify-content-center search-div" action="?act=shop" method="post" role="search">
                                    <input class="form-control me-2 search-bar" type="search" name="keyword" placeholder="Tìm kiếm..." aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>