<?php
// Start the session
session_start();

// Include the database connection
require_once "connect.php";


// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['opslaan'])  ) {

    // Get the product ID and new product information from the form
    $id = $_POST["id"];
    $product = $_POST["product"];
    $price = $_POST["price"];
    $img = $_POST["img"];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE productdata SET product=:product, price=:price, img=:img WHERE id=:id");
    
    // Bind the parameters to the statement
    $stmt->bindParam(':product', $product);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':id', $id);
    
    // Execute the statement
    $stmt->execute();

  
    $conn = null;

}


if (isset($_POST["id"])) {
    $id = $_POST["id"];


    $stmt = $conn->prepare("SELECT * FROM productdata WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $productData = $stmt->fetch(PDO::FETCH_ASSOC);


    $product = $productData["product"];
    $price = $productData["price"];
    $img = $productData["img"];
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="assets/css/edit.css">
</head>

<body>
    <div class="flex-wrapper">
    <div class="wrapper">
    <h1>Edit Product</h1>
    <form action="edit_product.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="product">Product:</label><br>
        <input type="text" name="product" value="<?php echo $product; ?>">
        <br><br>
        <label for="price">Price:</label><br>
        <input type="text" name="price" value="<?php echo $price; ?>">
        <br><br>
        <label for="img">Image:</label><br>
        <input type="text" name="img" value="<?php echo $img; ?>">
        <br><br>
        <button class="update-button" type="submit" name="opslaan">Update Product</button>
    </form>
    </div>
    </div>
</body>

</html>
