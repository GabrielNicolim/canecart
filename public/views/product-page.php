<?php
    session_start();

    $page_title = 'Produtos';
    $style_sheets = ['../css/style.css', 
                     '../css/product-page.css'];
    $icon_folder = '../images/logos/favicon.png';

    require("../includes/head.php");

?>

    <div class="shop-car">
        <img src="../icons/shop-car.svg" alt="">
    </div>

    <div class="container">
        <?php

            include("../includes/header.php");

        ?>
    
        <section class="product-overview">
            <div class="top">
                <div class="left">
                    <img src="../images/card1-image.png" alt="">
                </div>

                <div class="right">
                    <div class="name-product">Product Product</div>
                    
                    <div class="sold-products">
                        Pedidos: 123
                    </div>

                    <div class="price-procut">R$ 90.99</div>

                    <a href="#" class="btn">
                        Comprar
                    </a>

                    <div class="description">
                        <h2>Descrição</h2>
                        <span class="text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas harum eveniet maiores. Libero laborum commodi optio distinctio, nobis quaerat ipsam, officia eveniet asperiores cum velit. Animi dolores natus perferendis. Perferendis.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas harum eveniet maiores. Libero laborum commodi optio distinctio, nobis quaerat ipsam, officia eveniet asperiores cum velit. Animi dolores natus perferendis. Perferendis.
                        </span>

                        <span class="tag">
                            Categoria
                        </span>
                    </div>
                </div>
            </div>
        </section>    

        <?php

            include("../includes/footer.php");

        ?>
    </div>
</body>
</html>