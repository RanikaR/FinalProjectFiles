<?php include '../view/header.php'; ?>
<main>
    <h1>Add Technician</h1>
    <form action="index.php" method="post" id="add_technician_form">
        <input type="hidden" name="action" value="add_technician">
    <div>
        <label>First Name: </label>
        <input type="text" name="first_name" />       
    </div>
    <br>
    <div>
        <label>Last Name: </label>
        <input type="text" name="last_name" />
    </div>
    <br>
    <div>
        <label>Email: </label>
        <input type="text" name="email" />
    </div>
    <br>
    <div>
        <label>Phone: </label>
        <input type="text" name="phone" />
    </div>
    <br>
    <div>
	       <label>Password: </label>
         <input type="text" name="password" />
    </div>
    <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add Technician" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_technicians">View Technician List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>