<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<style>


.product-flex-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    align-items: center;
    gap: 1.5rem;
    margin-top: 1rem;

}

.product-card {
    background-color: rgb(210, 210, 210);
    max-height: 300px;
    text-align: center;

}

.img {
    max-height: 280px;
    max-height: 200px;
}
@media screen and (max-width: 768px) {
    .product-flex-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media screen and (max-width: 480px) {
    .product-flex-container {
    grid-template-columns: 1fr;
  }
}
</style>
<div class="product-flex-container">
    <?php include 'connect.php';

try {
    $stmt = $conn->query("SELECT id, product, price, img FROM productdata");
    
    while ($row = $stmt->fetch()) {
        echo '<div class="product-card">';
        echo '<img class="img" src="'. $row['img'].' "> <br>';
        echo ' '.$row['product'].'<br> €'.$row['price']. '<br>' . "\n";
        echo '</div>';
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

</div>
</body>
</html>