<!--<div class="main-slider-one main-slider-two slider-area">-->
<!--    <div id="wrapper">-->
<!--        <div class="slider-wrapper">-->
<!--            <div id="mainSlider" class="nivoSlider">-->
<!--                --><?php //$i=2; foreach ($data_banner as  $value) {  ?>
<!--                <img src="public/--><?php //=$value['HinhAnh']?><!--" alt="main slider" title="#htmlcaption"/>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </div>							-->
<!--    </div>-->
<!--</div>-->
<div id="header" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-custom">
        <?php for($i = 0; $i < sizeof($data_banner); $i++){
            if ($i == 0) {
                echo '<button type="button" data-bs-target="#header" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
             } else {
                echo '<button type="button" data-bs-target="#header" data-bs-slide-to="'.$i.'" aria-label="Slide '.($i+1).'"></button>';
            }
        }?>
<!--        <button type="button" data-bs-target="#header" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--        <button type="button" data-bs-target="#header" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--        <button type="button" data-bs-target="#header" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--        <button type="button" data-bs-target="#header" data-bs-slide-to="3" aria-label="Slide 4"></button>-->
    </div>
    <div class="carousel-inner">
        <?php
         foreach ($data_banner as $key => $value) {
             if ($key == 0) {
                 echo '<div class="carousel-item active" data-bs-interval="3000">';
                 echo '<a href="?act=detail&id='.$value['MaSP'].'"><img src="public/'.$value['HinhAnh'].'" class="d-block w-100" alt="..." ></a>';
                 echo '</div>';
             } else {
                 echo '<div class="carousel-item" data-bs-interval="3000">';
                 echo '<a href="?act=detail&id='.$value['MaSP'].'"><img src="public/'.$value['HinhAnh'].'" class="d-block w-100" alt="..." ></a>';
                 echo '</div>';
             }
         }
        ?>
<!--        <div class="carousel-item active" data-bs-interval="5000">-->
<!--            <img src="/public/img/banners/zfold-flip.jpg" class="d-block w-100" alt="...">-->
<!--        </div>-->
<!--        <div class="carousel-item" data-bs-interval="5000">-->
<!--            <img src="/public/img/banners/tabS9Fe.jpg" class="d-block w-100" alt="...">-->
<!--        </div>-->
<!--        <div class="carousel-item" data-bs-interval="5000">-->
<!--            <img src="/public/img/banners/Xiaomi12.jpg" class="d-block w-100" alt="...">-->
<!--        </div>-->
<!--        <div class="carousel-item" data-bs-interval="5000">-->
<!--            <img src="/public/img/banners/iphone.png" class="d-block w-100" alt="...">-->
<!--        </div>-->
    </div>

    <button class="carousel-control-prev control-button carousel-custom" type="button" data-bs-target="#header"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next control-button carousel-custom" type="button" data-bs-target="#header"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>