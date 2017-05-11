<?php
require('../model/database.php');
require('../model/technicans_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_technicians';
    }
}

if ($action == 'list_technicians') {
	$technicians = get_technicians();
	include('technician_list.php'); }
    else if ($action == 'delete_technician') {
	$tech_id = filter_input(INPUT_POST, 'tech_id', FILTER_VALIDATE_INT);
	if ($tech_id == NULL || $tech_id == FALSE) {
	    $error = "Missing or incorrect technician ID.";
	    include('..errors/error.php');
	} else {
	    delete_technician($tech_id);
	}

} else if ($action == 'show_add_form') {
	$technicians = get_technicians();
	include('technician_add.php');

} else if ($action == 'add_technician') {
	$tech_id = filter_input(INPUT_post, 'tech_id');
	$first_name = filter_input(INPUT_post,'first_name');
	$last_name = filter_input(INPUT_post, 'last_name');
	$email = filter_input(INPUT_post, 'email');
	$phone = filter_input(INPUT_post, 'phone');
	$password = filter_input(INPUT_post, 'password');
	if ($tech_id == NULL || $tech_id == FALSE || $first_name == NULL || $first_name == FALSE || $last_name == NULL || $last_name == FALSE || $email == NULL || $email == FALSE || $phone == NULL || $phone == FALSE || $password == NULL || $password == FALSE) {
		$error = "Invalid technician data. Check all fields and try again.";
	include('../errors/error.php');
	} else {
		add_technician($tech_id, $first_name, $last_name, 				       $email, $phone, $password);
		header("Location: .");
	}
}else if ($action == 'list_technicians') {
	  $techinicans = get_technicians();
	  include('technician_list');
}
?>
