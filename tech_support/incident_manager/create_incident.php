<?php include '../view/header.php'; ?>
<main>
<h1>Get Customer</h1>
    <form action="index.php" method="post" id="search_customer_form">
        <input type="hidden" name="action" value="search_customer_email">
<p>Please enter the customer email to select customer.</p>    
    <div>
        <label>Email:</label>
        <input type="text" name="email" />
        <br>
    </div>
        <input type="submit" value="Get Customer" />
        <br>
</form>
</main>
<?php include '../view/footer.php'; ?>