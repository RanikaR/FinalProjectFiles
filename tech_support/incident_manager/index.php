<?php
require('../model/database.php');
require('../model/incident_db.php'); 
require('../model/customer_db.php');

if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'create_incident';
    }
} if ($action == 'create_incident') {
      include('create_incident.php');

}      
?>