<?php 
    require_once "controller/cMarcaC.php";
    $oContMarca = new cMarcaC();
    $resultMarca = $oContMarca->listar();
?>

<div class="container">
    <div class="logo-carousel owl-carousel">

    <?php  
        foreach ($resultMarca as $rowM) {
            {
        }
    ?>
        <div class="logo-item">
            <div class="tablecell-inner">
                <img src="<?php echo $rowM["imag_mar"]; ?>" alt="">
            </div>
        </div>

        <?php 
        }
        ?>

    </div>
</div>