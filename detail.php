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
    * {
        margin: 0px;
        paddin: 0px;
    }

    .detail-main {
        background-color: rgb(239, 236, 236);
        width: 100%;
        height: auto;
    }

    .detail-wrapper {
        display: flex;
        text-align: center;
        justify-content: center;
    }

    img {
        width: 40%;
        max-heigth: 250px
    }

    .product-view {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    h1 {
        color: rgb(145, 144, 144);
        font-size: 50px;
    }

    p {
        color: rgb(145, 144, 144);
        font-size: 25px;
    }

    .main-menu {
        width: 100%;
        height: 60px;
        background-color: rgb(239, 236, 236);
        display: flex;
        justify-content: space-around;
    }
    .main-menu-wrapper{
        margin-top: 1rem;
    }
    .main-menu-wrapper button{
        width: 100px;
        height: 30px;
        border: none;
        background-color: #B9F5D8;
        border-radius: 10px;
        color: white;
    }
    </style>
    <div class="main-menu">
        <div class="main-menu-wrapper">
        <div>
            <a href="webshop.php"><button>Home</button></a>
        </div>
        </div>
        <div></div>
    </div>
    <div class="detail-main">
        <div class="detail-wrapper">
            <?php $productId = $_GET['id'];
                include 'connect.php';

                try {
                    $stmt = $conn->query("SELECT id, product, price, img FROM productdata WHERE id = $productId");
                    
                    while ($row = $stmt->fetch()) {
                        echo '<div class="product-view">';
                        echo '<img class="img" src="'. $row['img'].' "> <br>';
                        echo '<div class="product-beschrijving">';
                        echo '<h1>'.$row['product'].'</h1>'.'<br> <p>€'.$row['price']. '</p><br>';
                        echo '</div></div></a>';
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }



?>
        </div>
    </div>
</body>

</html>