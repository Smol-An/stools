<!DOCTYPE html>
<html>
    <head>
        <title>Product Catalog</title>
        <style>
            .container { display: flex; flex-wrap: wrap; }
            .tile { flex-basis: calc(33.3333% - 20px); margin: 10px; border: 1px solid #ccc; padding: 10px; box-sizing: border-box; }
            .product-name { font-size: 18px; }
            .product-price { color: #888; }
            .collection-name { font-size: 20px; font-weight: bold; }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            $currentCollection = '';
            $count = 0;

            if (isset($products) && !empty($products)) {
                foreach ($products as $product) {
                    // Check if we need to start a new collection
                    if ($currentCollection != $product['collection_name']) {
                        $currentCollection = $product['collection_name'];

                        // If the collection name would be the third element, insert an empty tile first
                        if ($count == 2) {
                            echo '<div class="tile"></div>';
                            $count = 0; // Reset count as we're starting a new line
                        }

                        // Display the collection name
                        echo '<div class="tile">';
                        echo '<div class="collection-name">' . $currentCollection . '</div>';
                        echo '</div>';
                        $count++;
                    }

                    // Display the product
                    echo '<div class="tile">';
                    echo '<div class="product">';
                    echo '<div class="product-name">' . $product['name'] . '</div>';
                    echo '<div class="product-price">$' . number_format($product['price'], 2) . '</div>';
                    echo '<div class="product-collection">Collection: ' . $currentCollection . '</div>';
                    echo '</div>';
                    echo '</div>';
                    $count++;

                    // Reset count if it reaches 3 to start a new line
                    if ($count == 3) {
                        $count = 0;
                    }
                }
            }
            ?>
        </div>
    </body>
</html>
