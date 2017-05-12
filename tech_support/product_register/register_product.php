<?php include '../view/header.php'; ?>
<main>
<h1>Register Product</h1>
    <form action="index.php" method="post" id="register_product_form">
        <input type="hidden" name="action" value="register_product">

<div>
     <label>Customer:</label>
     <?php echo $customer['firstName' . ' ' . 'lastName']; ?>
     <br>
</div>

<div>
     <label>Product:</label>
     
     <?php $tech_product = filter_input(INPUT_POST, 'productCode'); ?>


</div>    
    
        <input type="submit" value="Register Product" />
        <br>
</form>
</main>
<?php include '../view/footer.php'; ?>
