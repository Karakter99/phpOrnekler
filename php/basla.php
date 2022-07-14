<!DOCTYPE html>
<html>
    <head>
        <title>Matematiksel Islemler</title>
    </head>
    <body>
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "toplama";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connections
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        



        $s = $_GET['s'];

        switch($s)
        {
            case "sonuc":?>
                <form method="post" id="form2"  name="form2" action="?s=tablo">
                    <p><input type="submit" id="tablo" name="tablo" value="Tabloyu Olustur"></p>
                </form>
                <?php 
                $num1 = $_POST["sayi1.$i"];
                $num2 = $_POST["sayi2.$i"];
                $haysi = $_POST["islem.$i"];

                for($i =0;$i < @$_POST["sayi"]; $i++)
                {
                    $enson =Dortislem($num1, $num2,$haysi) ; 
                
                    $sql = "INSERT INTO sonuc (sayi1, sayi2, islem, sonuc) VALUES ('$num1', '$num2', '$haysi', '$enson')";
                    if (mysqli_multi_query($conn, $sql)) {
                        echo "New records created successfully";
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                      
                      mysqli_close($conn);

                }

                function dortislem($num1,$num2,$haysi)
                {
                    $sonuc= 0; 
                    if($haysi == "+")
                    {
                        $sonuc = $num1 +$num2;
                    }
                    else if($haysi == "-")
                    {
                        $sonuc = $num1 - $num2;
                    }
                    else if($haysi == "*")
                    {
                        $sonuc = $num1 * $num2;
                    }
                    else if($haysi == "/")
                    {
                        $sonuc = round($num1 / $num2,2);
                    }
                    else{}
                    return $sonuc;
                }
                
            break;
            case "tablo": ?>
            <table width ="100%" border="1">
                <tr>
                    <th>Sayi1</th>
                    <th>sayi2</th>
                    <th>Islem</th>
                    <th>Sonuc</th>
                </tr>

            <?php
            $bul = "SELECT * FROM sonuc";
            $kayit = $conn->query($bul);
            if($kayit->num_rows >0)
            {
                while($satir = $kayit ->fetch_assoc())
                { ?>
                <tr>
                    <td style="font-size: 15px;"><?php echo $satir["sayi1"]."<br>"?></td>
                    <td style="font-size: 15px;"><?php echo $satir["sayi2"]."<br>"?></td>
                    <td style="font-size: 15px;"><?php echo $satir["islem"]."<br>"?></td>
                    <td style="font-size: 15px;"><?php echo $satir["sonuc"]."<br>"?></td>
                </tr>


                
           <?php }
        }
                ?>
        
        </table>
           <?php break;
            case "san": ?> 
        <form method="POST" action="?s=sonuc">
            <?php 
            for($i=0;$i<@$_POST["sayi"]; $i++)
            { ?>
            <label for="sayi1">Sayi1: <input type="text" name="sayi1<?=$i?>" id="sayi1"></label><br>
            <label for="sayi2">Sayi2: <input type="text" name="sayi2<?=$i?>" id="sayi2"></label><br><br>
            <select name="islem<?=$i?>" id="islem">
                <option value="0" selected="selected">Seçiniz</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br><br>
            <?php }
            ?>
            <input type="submit" name="button" value="Gonder">
        </form>
  <?php break;
  default:?>
    <form name="form1" id="form1" method="post" action="?s=san">
        <p><label for="sayi">Kac islem</label>
        <input type="text" name="sayi" id="sayi"></p>
        <p><input type="submit" name="gonder" id="gonder"></p>
    </form>
  <?php break; 
    } ?> 
    </body>
</html>