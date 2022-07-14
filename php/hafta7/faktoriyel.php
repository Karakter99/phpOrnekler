<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label for="sayi">Sayı</label>
  <input type="text" name="sayi" id="sayi" />
  <input type="submit" name="button" id="button" value="Sonuç" />
</form>
<?
$sayi = $_POST["sayi"];
function faktoriyel ($sayi)
{
	if($sayi<1) {
		return 1;
	}
	else {
		return $sayi * faktoriyel($sayi-1);
	}
}
if(!empty($sayi)) {
echo  $sayi."! in sonucu: ".faktoriyel ($sayi);
}
?>
</body>
</html>