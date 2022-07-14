<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $s = $_GET['s'];
    switch($s)
    {
        case "sonuc":
            $sayi = $_GET['sayi'];
            ?>
            <table border="1">
                <tr>
                    <th>Sira</th>
                    <th>Isim Soyisim</th>
                    <th>Ogrenci Numara</th>
                </tr>
                <?php 
                for($i=0;$i<=$sayi;$i++){
                    $adsoyad = $_POST["ogrAd".$i];
                    $ogrenciNo = $_POST["ogrNo".$i];
                    ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?php $adsoyad?></td>
                        <td><?php $ogrenciNo?></td>
                    </tr>
              <?php } //Ikinci for un kapanyan yeri 
                ?>

            </table>
        <?php     
        break;

        case "san": ?>
        <form name ="form2" id = "form2" method= "post" action="?s=sonuc&sayi=<?=$sayi?>"> 
            <?php 

            for($i =0;$i<@$_POST["sayi"];$i++){ ?>
            <fieldset>
                <legend><?=$i ?>.Kisi</legend>
                <label for="ogrAd<?=$i?>"> Ogrenci Adi: <input type="text" name="ogrAd<?=$i?>" id="ogrAd<?=$i?>"></label><br>
            <label for="ogrNo<?=$i?>"> Ogrenci No: <input type="text" name="ogrNo<?=$i?>" id="ogrNo<?=$i?>"></label><br><br>
            </fieldset>
          <?php  } ?>
            <input type="submit" name="button" value="Listele">
        </form>

        <?php break;

        default: ?>
        <form name ="form1" id = "form1" method= "post" action="?s=san">
            <p><label for="sayi"> Kac ogrenci </label>
            <input type="text" name= "sayi" id="sayi"></p>
            <p><input type="submit" value ="Gonder" name= gonder id="gonder"></p>
        </form>
        <?php break;

    }
    ?>

</body>
</html>