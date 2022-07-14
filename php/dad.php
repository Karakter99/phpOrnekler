<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "yakup";

$ogrenciAdi = $_POST["ogrAd"];
$ogrenciNo = $_POST["ogrNo"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sonuc (ogrAd, ogrNo) VALUES ('$ogrenciAdi', '$ogrenciNo')";
if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>  
<form method="POST" action="">
    <label>Adiniz: <input type="text" name="ogrAd" id="ogrAd"></label><br>
    <label>Ogrenci Numaraniz: <input type="text" name="ogrNo" id="ogrNo"></label><br>
    <input type="submit" name="button" value="Gonder">


</form>

    </body>
</html>







