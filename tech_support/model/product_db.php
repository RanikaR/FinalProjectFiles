<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM tech_products
              ORDER BY productCode';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM tech_products
              WHERE productCode = :product_code';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_code", $product_code);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM tech_products
              WHERE productCode = :product_code';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($product_code, $name, $version, $releaseDate) {
    global $db;
    $query = 'INSERT INTO tech_products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:product_code, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $product_code);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();
}
?>
