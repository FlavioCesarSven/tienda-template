<div class="hero-items owl-carousel">

    <?php
    require_once "controller/cSliderC.php";
    $oContSlider = new cSliderC();
    $resultSlider = $oContSlider->listar();
    ?>

    <?php
    foreach ($resultSlider as $rowS) { {
        }
    ?>

        <div class="single-hero-items set-bg" data-setbg="<?php echo $rowS["imag_sli"]; ?>">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div> -->
        </div>

    <?php
    }
    ?>

</div>