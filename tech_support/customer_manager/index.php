<?php
require('../model/database.php');
require('../model/customer_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'customer_list';
    }
    
}if ($action == 'customer_list') {
    include('customer_list.php'); 

} else if ($action == 'search_customer') {
          $lastName = filter_input(INPUT_POST, 'lastName'); 
          
   //add error checker
        $customers = search_customer($lastName);
        include('customer_list.php'); 
          
} 

          
/*else if ($action == 'update_customer') {
          $customer = update_custer();
          $firstName = filter_input(INPUT_POST, 'first_name');
          $lastName = filter_input(INPUT_POST, 'last_name');
          $address = filter_input(INPUT_POST, 'address');
          $city = filter_input(INPUT_POST, 'city');
          $state = filter_input(INPUT_POST, 'state');
          $postalCode = filter_input(INPUT_POST, 'postalCode');
          $countryCode = filter_input(INPUT_POST, 'countryCode');
          $phone = filter_input(INPUT_POST, 'phone');
          $email = filter_input(INPUT_POST, 'email');
          $password = filter_input(INPUT_POST, 'password');

}*/
          
          
?>