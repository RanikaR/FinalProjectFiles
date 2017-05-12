<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_technician_form">
        <input type="hidden" name="action" value="add_technician">

        <br>
    <div>
        <label>First Name</label>
        <input type="text" name="first_name" />
        <br>
    </div>
	
    <div>
        <label>Last Name</label>
        <input type="text" name="last_name" />
        <br>
    </div>

    <div>
        <label>Email</label>
        <input type="text" name="email" />
        <br>
    </div>

    <div>
        <label>Phone</label>
        <input type="text" name="phone" />
	      <br>
    </div>
    
    <div>
	       <label>Password</label>
         <input type="text" name="password" />
	       <br>
    </div>
    
        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_technicians">View Technician List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>