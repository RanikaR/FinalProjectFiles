<?php include '../view/header.php'; ?>
<main>
<h1>Register Product</h1>
    <form action="index.php" method="post" id="register_product_form">
        <input type="hidden" name="action" value="register_product">
<p>Please login before registering a product.</p> 
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