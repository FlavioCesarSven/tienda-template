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
        <li class=""><a href="productos_categoria.php?idcat=<?php echo $rowC["idcategoria"]; ?>"><?php echo $rowC["nomb_cat"]; ?></a></li>

    <?php  } ?>
</ul>