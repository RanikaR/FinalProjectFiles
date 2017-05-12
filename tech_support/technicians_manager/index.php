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

else if ($action == 'delete_technician'){
    $techID = filter_input(INPUT_POST, 'techID', 
            FILTER_VALIDATE_INT);
            include('../errors/error.php');
    	delete_technician($techID);
}

else if ($action == 'show_add_form'){
    $techies = get_technician();
    include('technician_add.php');
}

else if ($action == 'add_technicians'){

    $first_name  = filter_input(INPUT_POST, 'first_name');
    $last_name  = filter_input(INPUT_POST, 'last_name');
    $email  = filter_input(INPUT_POST, 'email');
    $phone  = filter_input(INPUT_POST, 'phone');
    $password   = filter_input(INPUT_POST, 'password');

    if($first_name == NULL || $first_name == FALSE || $last_name == NULL || $last_name == FALSE || $email == NULL  || $email == FALSE || $phone == NULL || $phone == FALSE || $password == NULL || $password == FALSE) {
 	
	$error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
        }     
    else { 
        add_technicians( $first_name, $last_name, $email, $phone, $password);
	      header("Location: .");
        }
}
    else if ($action == 'list_technicians'){
        $technicians == get_technicians();
        include('technician_list.php');
    }

    
?>