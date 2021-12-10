<?php
require_once "controller/cProductoC.php";
$oContProducto = new cProductoC();
$resultProducto = $oContProducto->listarUltimos(6);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 " style="padding-top: 1.5em;">

            <div class="section-title">
                <h2>Lo nuevo en Smart Shop</h2>
            </div>

            <!-- <div class="filter-control">
                            <ul>
                                <li class="active">Clothings</li>
                                <li>HandBag</li>
                                <li>Shoes</li>
                                <li>Accessories</li>
                            </ul>
                        </div> -->

            <div class="product-slider owl-carousel">

            <?php  
                foreach ($resultProducto as $rowP) {
                    {
                }
            ?>

                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?php echo $rowP["imag_pro"]; ?>" alt="">
                        <div class="sale">New</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="#">+ Add Cart</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Coat</div>
                        <a href="#">
                            <h5><?php echo substr( $rowP["nomb_pro"],0 , 60); ?></h5>
                        </a>
                        <div class="product-price">
                            <?php echo $rowP["pven_pro"]; ?>
                            <!-- <span>$35.00</span> -->
                        </div>
                    </div>
                </div>

                <?php } ?>


            </div>
        </div>
    </div>
</div>