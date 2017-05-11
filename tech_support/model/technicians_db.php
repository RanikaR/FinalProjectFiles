<?php
//Get all technicians
function get_technicians() {
	global $db;
	$query = 'SELECT * FROM technicians
		  ORDER BY techID';
	$statement = $db->prepare($query);
	$statement -> execute();
	$technicians = $statement->fetchAll();
	$statement -> closeCursor();
	return $technicians;
}

//Get technician
function get_technician($tech_id) {
	global $db;
	$query = 'SELECT * FROM technicians
		  WHERE techID = :techID';
	$statement = $db->prepare($query);
	$statement -> bindValue(':techID', $tech_id);
	$statement -> execute();
	$technician = $statement->fetch();
	$statement -> closeCursor();
	return $technician;
}

//Delete technician from database
function delete_technician() {
	global $db;
	$query = 'DELETE FROM technicians
		  WHERE techID = :techID';
	$statement = $db->prepare($query);
	$statement -> bindValue(':techID', $tech_id);
	$statement -> execute();
	$statement -> closeCursor();
}

//Add technician to database
function add_technician($tech_id, $first_name, $last_name, $email, $phone, $password) {
	global $db;
	$statement = $db->prepare($query);
	$statement -> bindValue(':techID', $tech_id);
	$statement -> bindValue(':firstName', $first_name);
	$statement -> bindValue(':lastName', $last_name);
	$statement -> bindValue(':email', $email);
	$statement -> bindValue(':phone', $phone);
	$statement -> bindValue(':password', $password);
	$statement -> execute();
	$statement -> closeCursor();
	

}
?>
