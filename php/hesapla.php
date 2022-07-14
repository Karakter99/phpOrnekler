<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Belge</title>
<style>
label,input,select,p {
	float:left;
	clear:left;
}
</style>
</head>

<body>
<?php
$sayi1 = $_POST["sayi1"];
$sayi2 = $_POST["sayi2"];
$islem = $_POST["islem"];
?>
<form id="form1" name="form1" method="post" action="">
  <label for="sayi1">Sayi 1</label>
  <input type="text" name="sayi1" id="sayi1" value="<?=$sayi1?>" />
  <label for="sayi2">Sayi 2</label>
  <input type="text" name="sayi2" id="sayi2" value="<?=$sayi2?>" />
  <label for="islem"></label>
  <select name="islem" id="islem">
  <option value="0">İşlem Seçiniz</option>
  <option value="+" <?=($islem == "+") ? "selected='selected'" : ""?>>Toplama</option>
  <option value="-" <?=($islem == "-") ? "selected='selected'" : ""?>>Çikarma</option>
  <option value="*" <?=($islem == "*") ? "selected='selected'" : ""?>>Çarpma</option>
  <option value="/" <?=($islem == "/") ? "selected='selected'" : ""?>>Bölme</option>
  </select>
  <input type="submit" name="button" id="button" value="Hesapla" />
</form>
<?php
if($_POST["button"] != "") {


	 if($islem == "+") {
		$sonuc = $sayi1 + $sayi2;
	}
	else if($islem == "-") {
		$sonuc = $sayi1 - $sayi2;
	}
	else if($islem == "*") {
		$sonuc = $sayi1 * $sayi2;
	}
	else if($islem == "/") {
		$sonuc = $sayi1 / $sayi2;
	}
	else {}
	echo "<p><b>Sonuç:</b>".$sonuc."</p>";

}
?>
</body>
</html>