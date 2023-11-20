<div class="sidebar left-sidebar">
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="float-start">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <div id="accordion" class="accordion-flush">
                <?php $i = 1;
                    foreach ($data_chitietDM as $row) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?=$i?>">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
                                <div class="medium-a">
                                    <b><?= $data_danhmuc[$i-1]['TenDM'] ?></b>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$i?>" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <div class="normal-a">
                                    <?php foreach ($row as $value) { ?>
                                        <a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
                } ?>
            </div>
        </div>
    </div>
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h5 class="floatleft">Thương Hiệu Điện Thoại</h5>
        </div>
        <div class="brands-select clearfix">
            <ul>
                <li>
                    <?php for($i=0;$i<4;$i++) {?>
                    <a href="?act=shop&sp=1&loai=<?=$data_loaisp[$i]['TenLSP']?>"><?=$data_loaisp[$i]['TenLSP']?></a>
                    <?php } ?>
                </li>
                <li>
                <?php for($i=4;$i<8;$i++) { ?>
                    <a href="?act=shop&sp=1&loai=<?=$data_loaisp[$i]['TenLSP']?>"><?=$data_loaisp[$i]['TenLSP']?></a>
                <?php  }?>
                </li>
            </ul>
        </div>
    </div>

</div>