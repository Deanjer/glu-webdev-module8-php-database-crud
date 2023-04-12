<?php $productId = $_GET['id'];
                include 'connect.php';

                try {
                    $stmt = $conn->query("SELECT id, product, price, img FROM productdata WHERE id = $productId");
                    
                    while ($row = $stmt->fetch()) {
                        echo '<a href="detail.php?id='.$row['id'].'"><div class="product-card">';
                        echo '<img class="img" src="'. $row['img'].' "> <br>';
                        echo $row['product'].'<br> €'.$row['price']. '<br>' . "\n";
                        echo '</div></a>';
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }