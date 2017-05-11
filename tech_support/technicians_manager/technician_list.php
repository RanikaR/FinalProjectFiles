<?php include '../view/header.php'; ?>
<main>
	<h1>Technician List</h1>

<section>
	<!-- Displays Table of Technicians -->
	<table>
	    <tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail</th>
		<th>Phone</th>
		<th>Password</th>
		<th>&nbsp;</th>
	    </tr>
	    <?php foreach ($technicians as $technician) :?>
	    <tr>
		<td><?php echo $technican['firstName']; ?></td>
		<td><?php echo $technican['lastName']; ?></td>
		<td><?php echo $technican['email']; ?></td>
		<td><?php echo $technican['phone']; ?></td>
		<td><?php echo $technican['password']; ?></td>
		<td><form action="." method="post">
		    <input type="hidden" name="action"
			   value="delete_technician">
		    <input type="hidden" name="firstName"
			   value="<?php echo $technician['firstName']; ?>">
		    <input type="hidden" name="lastName"
			   value="<?php echo $technician['lastName']; ?>">
		    <input type="hidden" name="email"
			   value="<?php echo $technician['email']; ?>">
		    <input type="hidden" name="phone"
			   value="<?php echo $technician['phone']; ?>">
		    <input type="hidden" name="password"
			   value="<?php echo $technician['password']; ?>">

</main>
<?php include '../view/footer.php';?>
