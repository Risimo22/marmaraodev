<?php
include_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; 

    
    $stmt = $conn->prepare("DELETE FROM rezervasyon WHERE musteri_id = ?");
    $stmt->bind_param("i", $id);

    
    $stmt->execute();

    $stmt->close();
}

$conn->close();


header('Location: index.php');
exit();
?>
