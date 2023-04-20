<?php 
include 'connect.php';

if(isset($_POST['delete'])) {
    $product_id = $_POST['id'];
    
    $stmt = $conn->prepare("DELETE FROM productdata WHERE id=:product_id");
    $stmt->bindParam(':product_id', $product_id);
    
    if ($stmt->execute()) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
