<?php

require('db/connect.php');

$query = "SELECT COUNT(id_user) AS users, (SELECT COUNT(*) FROM eq3.products) AS products, 
        (SELECT COUNT(id_order) FROM eq3.orders) AS sells
        FROM eq3.users";
$stmt = $conn -> query($query);
$stmt -> execute();
$info = $stmt -> fetch(PDO::FETCH_ASSOC);

// Select all the orders by the most sold products**
$query = "SELECT id_product, name_product, SUM(eq3.order_products.quantity_product) AS sales, photo_product,
            price_product, type_product
            FROM eq3.orders 
            INNER JOIN eq3.order_products ON fk_order = id_order
            INNER JOIN eq3.products ON id_product = fk_product
            WHERE products.deleted = FALSE GROUP BY products.id_product ORDER BY sales DESC";

$stmt = $conn -> prepare($query);

$stmt -> execute();
$products_sold = $stmt -> fetchAll();

// Select all the orders by the most sold products**
$query = "SELECT (price_product - base_cost_product) AS absolute_profit,id_product, name_product, photo_product,
            price_product, base_cost_product, profit_margin, type_product
            FROM eq3.orders 
            INNER JOIN eq3.order_products ON fk_order = id_order
            INNER JOIN eq3.products ON id_product = fk_product
            WHERE products.deleted = FALSE GROUP BY products.id_product ORDER BY absolute_profit DESC LIMIT 10";

$stmt = $conn -> prepare($query);

$stmt -> execute();
$data = $stmt -> fetchAll();

// Select all the orders by the most sold products**
$query = "SELECT date_order, SUM(order_products.quantity_product)
            FROM eq3.orders
            INNER JOIN eq3.order_products ON fk_order = id_order
            WHERE date_order >= current_date - interval '30' day
            GROUP BY orders.date_order ORDER BY orders.date_order";

$stmt = $conn -> prepare($query);

$stmt -> execute();
$chartArea = $stmt -> fetchAll();