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
function get_technician($techID) {
	global $db;
	$query = 'SELECT * FROM technicians
		  WHERE techID = :techID';
	$statement = $db->prepare($query);
	$statement -> bindValue(':techID', $techID);
	$statement -> execute();
	$technician = $statement->fetch();
	$statement -> closeCursor();
	return $technician;
}

//Delete technician from database
function delete_tech($techID) {
	global $db;
	$query = 'DELETE FROM technicians
		  WHERE techID = :techID';
	$statement = $db->prepare($query);
	$statement -> bindValue(':techID', $techID);
	$statement -> execute();
	$statement -> closeCursor();
}

//Add technician to database
function add_technician($firstName, $lastName, $email, $phone, $password) {
	global $db;
  $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                 (:firstName, :lastName, :email, :phone, :password)';
	$statement = $db->prepare($query);
	$statement -> bindValue(':firstName', $firstName);
	$statement -> bindValue(':lastName', $lastName);
	$statement -> bindValue(':email', $email);
	$statement -> bindValue(':phone', $phone);
	$statement -> bindValue(':password', $password);
	$statement -> execute();
	$statement -> closeCursor();
	

}
?>
