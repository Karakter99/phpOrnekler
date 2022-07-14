<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?
$s=$_GET["s"];
switch($s) {
	case "form":
	$sayi=$_POST["sayi"];
	?>
<form id="form1" name="form1" method="post" action="?s=tablo&sayi=<?=$sayi?>">
<? for($i=1;$i<=$sayi;$i++) { ?>
  <fieldset>
    <legend><?=$i?>. Kişi</legend>
  <label for="adsoyad<?=$i?>">Ad Soyad</label>
  <input type="text" name="adsoyad<?=$i?>" id="adsoyad<?=$i?>" />
  <label for="okulno<?=$i?>">Okul Numarası</label>
  <input type="text" name="okulno<?=$i?>" id="okulno<?=$i?>" />
  <label for="bolum">Bölüm</label>
  <select name="bolum<?=$i?>" id="bolum<?=$i?>">
    <option value="0" selected="selected">Seçiniz</option>
    <option value="BÖTE">BÖTE</option>
    <option value="İngilizce">İngilizce</option>
    <option value="Matematik">Matematik</option>
  </select>
  </fieldset>
  <? } ?>
  <input type="submit" name="button2" id="button2" value="Listele" />
</form>

    <?
	break;
	case "tablo":
	$sayi=$_GET["sayi"];
	?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col">Kişi Sayısı</th>
        <th scope="col">Ad Soyad</th>
        <th scope="col">Okul No</th>
        <th scope="col">Bölüm</th>
      </tr>
      <? 
	  	for($i=1;$i<=$sayi;$i++) { 
	  		$adsoyad = $_POST["adsoyad".$i];
			$okulno = $_POST["okulno".$i];
			$bolum = $_POST["bolum".$i];
	?>
      <tr>
        <th scope="row"><?=$i?></th>
        <td><?=$adsoyad?></td>
        <td><?=$okulno?></td>
        <td><?=$bolum?></td>
      </tr>
      <? } ?>
</table>
<?
	break;
	default:

?>
<form action="?s=form" method="post">
  <label for="sayi">Kişi Sayısı</label>
  <input type="text" name="sayi" id="sayi" />
  <input type="submit" name="button" id="button" value="Form Göster" />
</form>
<?
}
?>
</body>
</html>