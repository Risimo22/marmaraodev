<?php include_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Salonlar Tablosu</title>
  <!-- Add Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php




// Get data from "salonlar"
$sql = "SELECT * FROM rezervasyon";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<div class="container">';
  echo '<h2>Salonlar Tablosu <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Ekle</button></h2>';
  echo '<table class="table table-bordered">';
  echo '<thead><tr><th>Ad-Soyad</th><th>Telefon Numarasi</th><th>Salon Adi</th><th>Salon Durumu</th><th>Tarih</th></tr></thead>';
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["musteri_adi"]. "</td>";
    echo "<td>" . $row["musteri_tel"]. "</td>";
    echo "<td>" . $row["salon_adi"]. "</td>";
    echo "<td>" . $row["salon_durum"]. "</td>";
    echo "<td>" . date("Y-m-d H:i:s", strtotime($row["tarih"])) . "</td>";
    echo "<td>";
    echo "<form method='POST' action='sil.php'>";
    echo "<input type='hidden' name='id' value='" . $row["musteri_id"] . "'>"; 
    echo "<button class='btn btn-danger' type='submit'>Sil</button>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
  }
  
  echo "</table>";
  echo "</div>";
} else {
  echo "0 results";
}

$conn->close();
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="ekle.php" method="POST">
  <div class="mb-3">
    <label for="musteri_adi" class="form-label">Ad Soyad</label>
    <input type="text" class="form-control" id="musteri_adi" name="musteri_adi">
  </div>
  <div class="mb-3">
    <label for="musteri_tel" class="form-label">Müsteri Tel</label>
    <input type="text" class="form-control" id="musteri_tel" name="musteri_tel">
  </div>
  <div class="mb-3">
    <label for="salon_adi" class="form-label">Salon Adı</label>
    <input type="text" class="form-control" id="salon_adi" name="salon_adi">
  </div>
  <button type="submit" class="btn btn-primary">Ekle</button>
</form>

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
