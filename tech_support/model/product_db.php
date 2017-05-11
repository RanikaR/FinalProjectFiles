<?php
//Get all products
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

//Get product
function get_product($product_code) {
    global $db;
    $query = 'SELECT * FROM tech_products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $product_code);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

//Delete product from database
function delete_product($product_code) {
    global $db;
    $query = 'DELETE FROM tech_products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $product_code);
    $statement->execute();
    $statement->closeCursor();
}

//Add product to database
function add_product($product_code, $name, $version, $releaseDate) {
    global $db;
    $query = 'INSERT INTO tech_products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:productCode, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $product_code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();
}


?>
