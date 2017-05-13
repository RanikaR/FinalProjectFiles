<?php
require('../model/database.php');
require('../model/technicians_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_technicians';
    }
}

if ($action == 'list_technicians'){
    $technicians = get_technicians();
    include('technician_list.php');
}

else if ($action == 'delete_tech'){
    $techID = filter_input(INPUT_POST, 'techID');
      delete_tech($techID);
      header("Location: .");
    }

 else if ($action == 'show_add_form'){
    $technicians = get_technician();
    include('technician_add.php');
}

else if ($action == 'add_technician'){

    $firstName  = filter_input(INPUT_POST, 'firstName');
    $lastName  = filter_input(INPUT_POST, 'lastName');
    $email  = filter_input(INPUT_POST, 'email');
    $phone  = filter_input(INPUT_POST, 'phone');
    $password   = filter_input(INPUT_POST, 'password');

    if($firstName == NULL || $firstName == FALSE || $lastName == NULL || $lastName == FALSE || $email == NULL  || $email == FALSE || $phone == NULL || $phone == FALSE || $password == NULL || $password == FALSE) {
 	
	$error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
        }     
    else { 
        add_technician( $firstName, $lastName, $email, $phone, $password);
	      header("Location: .");
        }
}
    else if ($action == 'list_technicians'){
        $technicians == get_technicians();
        include('technician_list.php');
    }
   
?>