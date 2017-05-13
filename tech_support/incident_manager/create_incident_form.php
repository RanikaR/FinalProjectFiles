<?php include '../view/header.php'; ?>
<main>
<h1>Get Customer</h1>
    <form action="index.php" method="post" id="search_customer_form">
        <input type="hidden" name="action" value="search_customer_email">
   
    <div>
        <label>Customer:</label>
        <input type="text" name='firstName' . ' ' . 'lastName' />
    </div>
    <br>
    <div>
        <label>Product:</label>
        <select name="name"><option value="<?php echo $product['name']; ?>"></option></select>
    </div>
    <br>
    <div>
        <label>Title:</label>
        <input type="text" name="title"/>
    </div>
    <br>
    <div>
        <label>Description:</label>
        <textarea name="description" rows="4" cols="50"></textarea>
    </div>
    <br>
        <input type="submit" value="Create Incident" />
        <br>
</form>
</main>
<?php include '../view/footer.php'; ?>