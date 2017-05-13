<?php
//Get all customers
function get_customers() {
    global $db;
    $query = 'SELECT * FROM customers
              ORDER BY customerID';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

//Get customer from last name search
function search_customer($lastName) {
    global $db;
    $query = 'SELECT * FROM customers
              WHERE lastName = :lastName';
    $statement = $db->prepare($query);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $customer = $statement->fetchALL();
    $statement->closeCursor();
    return $customer;

}

//Shows customer result
function show_customer() {
         global $db;
         $query = 'SELECT firstName, email, city 
                   FROM customers
                   WHERE lastName = :lastName';
         $statement = $db->prepare($query);
         $statement -> bindValue(':lastName', $lastName);
         $statement -> execute();
         $customer -> $statement->fetch();
         $statement -> closerCursor();

}

//Brings to Customer View/Update Page
function select_customer($customerID) {
         global $db;
         $query = 'SELECT *
                   FROM customers
                   WHERE customerID = :customerID';
         $statement = $db->prepare($query);
         $statement -> bindValue(':customer', $customerID);
         $statement -> execute();
         $customer -> $statement->fetch();
         $statement -> closerCursor();
                   
//see pg 135
}

//Update customer information to database
function update_customer() {
         global $db;
         $query = "UPDATE customers
                  SET firstName = :firstName, lastName = :lastName, address = :address, city = :city, state = :state, postalCode = :postalCode, countryCode = countryCode, phone = :phone, email = :email, password = :password
                  WHERE customerID = :customerID";              
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':postalCode', $postalCode);
    $statement->bindValue(':countryCode', $countryCode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();
    $statement->closeCursor();
}

//Get customer from email
function search_customer_email($email) {
    global $db;
    $query = 'SELECT * FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $email;
}
?>