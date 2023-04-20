<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/database.css">
</head>

<body>
    <?php include 'connect.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
        
        include 'connect.php';
    
        $product = $_POST['product'];
        $price = $_POST['price'];
        $img = $_POST['img'];
    
        $stmt = $conn->prepare("INSERT INTO productdata (product, price, img) VALUES (:product, :price, :img)");
    
        $stmt->bindParam(':product', $product);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':img', $img);
    
        
        if ($stmt->execute()) {
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    }
    ?>
    <div class="main-wrapper">
        <h1>Database</h1>
        <div class="crud-wrapper">

            <form action="" method="POST">
                <div class="database-inssert margin-database">
                    <label>Product</label>
                    <input type="text" name="product" value="">
                </div><br>
                <div class="database-inssert">
                    <label>Prijs</label>
                    <input type="text" name="price" value="">
                </div><br>
                <div class="database-inssert">
                    <label>Img</label>
                    <input type="text" name="img" value="">
                </div><br>
                <div class="database-inssert"><br>
                    <button class="btn" type="submit" name="save">Opslaan</button>
                </div>
            </form>
        </div>

        <div class="table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Img</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Include the database connection
                require_once "connect.php";
                
                try {
                    $stmt = $conn->prepare("SELECT id, product, price, img FROM productdata");
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {     
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo '€'.$row['price']; ?></td>
                <td><?php echo '<img class="img-db" src="'.$row['img'].'">'; ?></td>
                <td>
                    <div class="actions-wrapper">
                    <form action="edit_product.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="crud-button" type="submit" name="edit">Edit</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td>
                    <div class="actions-wrapper">
                        <form action="delete_product.php" method="post"
                            onsubmit="return confirm('Are you sure you want to delete this product?');">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="crud-button" type="submit" name="delete">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php 
                    } 
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage(); 
                } 
            ?>
        </tbody>
    </table>
</div>


</div>

    </div>
    
</body>

</html>
