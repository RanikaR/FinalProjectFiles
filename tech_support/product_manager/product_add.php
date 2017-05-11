<?php include '../view/header.php'; ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <br>
    <div>
        <label>Code:</label>
        <input type="text" name="product_code" />
        <br>
    </div>
	
    <div>
        <label>Name:</label>
        <input type="text" name="name" />
        <br>
    </div>

    <div>
        <label>Version:</label>
        <input type="text" name="version" />
        <br>
    </div>

    <div>
	<label>Release Date:</label>
        <input type="text" name="releaseDate" />
	<span class="message">Use 'yyyy-mm-dd' format</span>        
	<br>
    </div>
        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>
