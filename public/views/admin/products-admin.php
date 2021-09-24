<?php

    session_start();

    if (!isset($_SESSION['isAuth']) && $_SESSION['idUser'] != -1) {
        header("Location: ../login.php");
        exit();
    }

    $page_title = 'Produtos - Admin';
    $icon_folder = '../../images/logos/favicon.png';

    $style_scripts = ['<script src="../../../js/admin.js"></script>',
                    '<link rel="stylesheet" href="../../css/style.css">',
                    '<link rel="stylesheet" href="../../css/admin.css">',
                    '<link rel="stylesheet" href="../../css/list.css">'];

    require("../../includes/head.php");

?>
    <div class="container">
        <!--Header-->
        <header id="top">
            <div class="content">
                <a href="home-admin.php" class="logo">
                    Administrador
                </a>
        
                <nav>
                    <a href="home-admin.php" class="btn">Home</a>
                    <a href="products-admin.php" class="btn active">Produtos</a>
                    <a href="peoples-admin.php" class="btn">Pessoas</a>
                    <a href="#Estatics-admin" class="btn">Estatísticas</a>
                </nav> 
            </div> 
        </header>

        <!--Produtos-->
        <section class="search">
            <form action="" method="GET">
                <span>Busca:</span>
                <input type="text" name="name_product" id="name_product" placeholder="Nome">
                
                <select name="type_product" id="type_product">
                    <option value="valor1" selected>Tipo</option>
                    <option value="valor2">Valor 1</option>
                    <option value="valor3">Valor 2</option>
                </select>

                <div class="value">
                    <span>Preço:</span>
                    <input type="number" name="min_value_product" id="min_value_product" placeholder="min" min="0" max="999">
                    <input type="number" name="max_value_product" id="max_value_product" placeholder="max" min="0" max="999">
                </div>

                <input type="submit" value="Buscar">
            </form>

            <a href="insert-products-admin.php" class="btn insert">Inserir Produto</a>
        </section>
        
        <section class="list">
            <div class="list-info">
                <div class="list-name">Nome</div>
                <div class="list-avalible">Estoque</div>
                <div class="list-type">Tipo</div>
                <div class="list-price">Preço</div>
                <div class="list-interaction">Interação</div>
            </div>

            <!--Content of table-->
            <?php

                require("../../../app/db/connect.php");

                $query = "SELECT id_product, name_product, photo_product, price_product, type_product, quantity_product, deleted FROM products";
                $stmt = $conn->prepare($query);
                $stmt -> execute();

                $return = $stmt -> fetchAll(PDO::FETCH_ASSOC);

                if ($stmt -> rowCount() == 0) {
                    echo '<div class="list-item"><div class="list-name">Nenhum produto cadastrado!</div></div>';
                } else {
                    foreach ($return as $product) {
                        echo '
                        <div class="list-item '; if($product['deleted']) echo 'item-deleted'; echo '" id="'.$product['id_product'].'">
                            <img class="image" src="../../images/';
                            if (is_null($product['photo_product'])) echo 'missing-image.png'; else echo $product['photo_product'];
                            echo '" alt="">
                            <div class="list-name">'.$product['name_product'].'</div>
                            <div class="list-avalible">'.$product['quantity_product'].'</div>
                            <div class="list-type">'.$product['type_product'].'</div>
                            <div class="list-price">'.$product['price_product'].'</div>
                            <div class="list-interaction">
                                <a href="../product-page.php?product='.$product['id_product'].'">
                                    <img src="../../icons/eye-fill.svg" alt="">
                                </a>
                                <a href="edit-product.php?product='.$product['id_product'].'">
                                    <img src="../../icons/pencil-square.svg" alt="">
                                </a>';
                                if ($product['deleted']) {
                                    echo '<a href="../../../app/deleteProducts.php?delete='.$product['id_product'].'&status=0">
                                        <img src="../../icons/trash-restore-solid.svg" alt="">
                                    </a>';
                                } else {
                                    echo '<a href="../../../app/deleteProducts.php?delete='.$product['id_product'].'&status=1" >
                                        <img src="../../icons/trash-fill.svg" alt="">
                                    </a>';
                                }                            
                                echo'
                            </div>
                        </div>
                        ';
                    }
                }
                
            ?>
        </section>
    </div>
</body>
</html>