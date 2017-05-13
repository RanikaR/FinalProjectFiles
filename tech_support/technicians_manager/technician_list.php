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
     
 	   <?php foreach ($technicians as $technician) : ?>
	    <tr>
		<td><?php echo $technician['firstName']; ?></td>
		<td><?php echo $technician['lastName']; ?></td>
		<td><?php echo $technician['email']; ?></td>
		<td><?php echo $technician['phone']; ?></td>
		<td><?php echo $technician['password']; ?></td>
		
    <td><form action="." method="post">
		    <input type="hidden" name="action"
			     value="delete_tech">
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
      <input type="submit" value="Delete">
      </form></td>
      </tr>
      <?php endforeach; ?>
</table>
<p><a href="?action=show_add_form">Add Technician</a></p>    
</section>
</main>
<?php include '../view/footer.php';?>
