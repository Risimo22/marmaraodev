
<?php
function ekle($conn, $salon_adi, $salon_kapasite) {
    
    $stmt = $conn->prepare("INSERT INTO salonlar (salon_adi, salon_kapasite) VALUES (?, ?)");
    $stmt->bind_param("si", $salon_adi, $salon_kapasite);

   
    $stmt->execute();

    $stmt->close();
}

function sil($conn, $salon_id) {
    
    $sql = "DELETE FROM salonlar WHERE salon_id=" . $salon_id;

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}

function duzenle($conn, $salon_id, $salon_adi, $salon_kapasite) {
    
    $stmt = $conn->prepare("UPDATE salonlar SET salon_adi = ?, salon_kapasite = ? WHERE salon_id = ?");
    $stmt->bind_param("sii", $salon_adi, $salon_kapasite, $salon_id);

    
    $stmt->execute();

    echo "Record updated successfully";

    $stmt->close();
}
?>
