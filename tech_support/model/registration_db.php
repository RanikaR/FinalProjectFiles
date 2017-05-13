<?php
//Get product code from customerID
function get_product_code() {
    global $db;
    $query = 'SELECT registrations.productCode, customers.customerID 
              FROM registrations
              INNER JOIN customers ON registrations.customerID = customers.customerID';
    $statement = $db->prepare($query);
    $statement->execute();
    $tech_product_code = $statement->fetch();
    $statement->closeCursor();
    return $tech_product_code;
}



?>