<?php
include_once('connect.php');

function ekle($conn, $musteri_adi, $musteri_tel, $salon_adi) {
    $salon_durum = 'Dolu';
    $tarih = date("Y-m-d H:i:s"); 

    
    $stmt = $conn->prepare("INSERT INTO rezervasyon (musteri_adi, musteri_tel, salon_adi, salon_durum, tarih) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $musteri_adi, $musteri_tel, $salon_adi, $salon_durum, $tarih); 
 
    $stmt->execute();

    $stmt->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $musteri_adi = $_POST['musteri_adi'];
    $musteri_tel = $_POST['musteri_tel'];
    $salon_adi = $_POST['salon_adi'];

   
    ekle($conn, $musteri_adi, $musteri_tel, $salon_adi);
}

$conn->close();


header('Location: index.php');
exit();
?>
