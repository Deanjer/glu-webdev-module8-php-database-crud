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
        *{
            margin: 0px;
            paddin: 0px;
        }
        .detail-main{
            background-color: rgb(208, 206, 206);
            width: 100%;
            height: 60vh;
        }
        .detail-wrapper{
            display: flex;
            text-align: center;
            justify-content: center;
        }
        img{
            width: 40%;
            max-heigth: 250px
        }
        </style>
        <div class="detail-main">
<div class="detail-wrapper">
<?php $productId = $_GET['id'];
                include 'connect.php';

                try {
                    $stmt = $conn->query("SELECT id, product, price, img FROM productdata WHERE id = $productId");
                    
                    while ($row = $stmt->fetch()) {
                        echo '<div class="product-card">';
                        echo '<img class="img" src="'. $row['img'].' "> <br>';
                        echo $row['product'].'<br> €'.$row['price']. '<br>' . "\n";
                        echo '</div></a>';
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }



?>
</div>
</div>
</body>
</html>