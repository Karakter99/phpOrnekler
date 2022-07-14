<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?
$mevsimler = array("Sonbahar","Kış","İlkbahar","Yaz");
$aylar = array(sonbahar=>"Eylül","Ekim","Kasım",kis=>"Aralık","Ocak","Şubat",ilkbahar=>"Mart","Nisan","Mayıs",yaz=>"Haziran","Temmuz","Ağustos");

$aylar2 = array(array("Eylül","Ekim","Kasım"),array("Aralık","Ocak","Şubat"),array("Mart","Nisan","Mayıs"),array("Haziran","Temmuz","Ağustos"));
?>
<table width="600" border="1" cellspacing="0" cellpadding="0">
  <tr>
  <? foreach($mevsimler as $mevsim) { ?>
    <th scope="col"><?=$mevsim?></th>
    <? } ?>
  </tr>
  <tr>
  <? for($i=0;$i<count($mevsimler);$i++) { ?>
    <td>
	<?
	for($j=0;$j<3;$j++) {
	echo $aylar2[$i][$j]."<br>";
	}
	?>
    </td>
    <? } ?>
  </tr>
</table>
</body>
</html>