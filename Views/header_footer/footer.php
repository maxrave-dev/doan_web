<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-map-location"></i>
                                        <p>279 Nguyễn Tri Phương, Quận 10, TPHCM</p>
                                        <p>Đại học Kinh tế TPHCM</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p>(+84) 348546203</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-mail-bulk"></i>
                                        <p>ndtminh2608@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="fa-solid fa-user-circle" style="margin-right: 5px"></i>Tài khoản</a></li>
                                    <li><a href="?act=cart"><i class="fa-solid fa-shopping-cart" style="margin-right: 5px"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=taikhoan"><i class="fa-solid fa-user-circle" style="margin-right: 5px"></i>Đăng Nhập</a></li>
                                    <li><a href="?act=checkout"><i class="fa-solid fa-money-bill" style="margin-right: 5px"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                    <li><a href="?act=shop&sp=<?=$row['MaDM']?>"><i class="fa-solid fa-database" style="margin-right: 5px"></i><?=$row['TenDM']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube fa-2xl"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>&copy; Maxphone 2023. All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img src="public/img/footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>