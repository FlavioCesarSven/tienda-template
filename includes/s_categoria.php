<?php
require_once "controller/cCategoriaC.php";
$oContCategoria = new cCategoriaC();
$resultCategoria = $oContCategoria->listar();
?>

<i class="ti-menu"></i>
<span>CATEGORIAS </span>
<ul class="depart-hover">
    <?php
    foreach ($resultCategoria as $rowC) { {
        }
    ?>
        <li class=""><a href="#"><?php echo $rowC["nomb_cat"]; ?></a></li>

    <?php  } ?>
</ul>