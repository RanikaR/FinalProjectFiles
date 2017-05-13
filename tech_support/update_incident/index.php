<?php
require('../model/database.php');
require('../model/registration_db.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'technician_login';
    }
    
}if ($action == 'technician_login') {
    include('technician_login.php'); 

} else if ($action == 'search_customer_email') {
          $email = filter_input(INPUT_POST, 'email'); 
          
   //add error checker
        $customers = search_customer($email);
        include('customer_list.php'); 
          
} 

          

          
          
?>