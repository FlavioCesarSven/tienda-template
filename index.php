<!DOCTYPE html>
<html lang="es">

<head>

    <?php include_once 'includes/s_head.php';  ?>
    <title>Pagina Principal</title>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <?php include_once 'includes/s_header.php';  ?>
    </header>
    <!-- Header End -->

    <main>
        <!-- Hero Section Begin -->
        <section class="hero-section">
            <?php include_once 'includes/s_slider.php';  ?>
        </section>
        <!-- Hero Section End -->
        
    
        <!-- Nuevos Productos Banner Section Begin -->
        <section class="women-banner spad">
            <?php include_once 'includes/s_productos.php';  ?>
        </section>
        <!-- Nuevos Productos Section End -->

        <!-- Laptops Productos Banner Section Begin -->
        <section class="women-banner spad">
            <?php include_once 'includes/s_productos_laptops.php';  ?>
        </section>
        <!-- Laptops Productos Section End -->

        <!-- Impresoras Productos Banner Section Begin -->
        <section class="women-banner spad">
            <?php include_once 'includes/s_productos_impresoras.php';  ?>
        </section>
        <!-- Impresoras Productos Section End -->
    </main>

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <?php include_once 'includes/s_marcas.php'; ?>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <?php include_once 'includes/s_footer.php'; ?>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <footer class="footer-section">
        <?php include_once 'includes/s_js.php'; ?>
    </footer>
</body>

</html>