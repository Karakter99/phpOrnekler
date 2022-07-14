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

    $s = $_GET['s']
    switch($s)
    {
        case "sonuc":
        break;

        case "san": ?>
        <form name ="form2" id = "form2" method= "post" action="?s=sonuc"> 
            <?php 

            for($i =; $i<@$_POST['sayi'];$i++){ ?>
            <label for="ogrAd"> Ogrenci Adi: <input type="text" name="ogrAd" id="ogrAd"></label><br>
            <label for="ogrNo"> Ogrenci No: <input type="text" name="ogrNo" id="ogrNo"></label><br><br>
            <input type="submit" name="button" value="Kaydet">
          <?php  }
            ?>
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