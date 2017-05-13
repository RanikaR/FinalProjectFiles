<?php include '../view/header.php'; ?>
<main>
<h1>Technician Login</h1>
    <form action="index.php" method="post" id="technician_login_form">
        <input type="hidden" name="action" value="technician_login">
<p>Please login before updating an incident.</p> 
<div>
        <label>E-mail:</label>
        <input type="text" name="email" />
        <br>
    </div>
        <input type="submit" value="Login" />
        <br>
</form>
</main>
<?php include '../view/footer.php'; ?>