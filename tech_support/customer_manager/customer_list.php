<?php include '../view/header.php'; ?>
<main>
<h1>Customer Search</h1>
    <form action="index.php" method="post" id="search_customer_form">
        <input type="hidden" name="action" value="search_customer">
<div>
        <label>Last Name:</label>
        <input type="text" name="lastName" />
        <br>
    </div>
        <input type="submit" value="Search" />
        <br>
</form>

<h1>Results</h1>
<p>Enter a last name to see the customers.</p>
<?php print_r($customer); ?>

<table>
<tr>
  <th>Name</th>
  <th>E-mail</th>
  <th>City</th>
</tr>
<?php foreach($customers as $customer) : ?>
  <tr>
      <td><?php echo $customer['firstName']; ?></td>
      <td><?php echo $customer['email']; ?></td>
      <td><?php echo $customer['city']; ?></td>
      <td><form action="." method="post">
      <input type="hidden" name="action"
        value="search_customer">
      <input type="hidden" name="first_name"
			   value="<?php echo $customer['firstName']; ?>">
      <input type="hidden" name="email"
			   value="<?php echo $customer['email']; ?>">
      <input type="hidden" name="city" 
			   value="<?php echo $customer['city']; ?>">
      <input type="submit" value="Select">
  </form></td>
            </tr>    
<?php endforeach; ?>
</table>

</main>
<?php include '../view/footer.php'; ?>