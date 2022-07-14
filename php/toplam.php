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
        // Check connection
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        



    
        switch($_GET['S'])
        {
            case "sonuc":?>
                <form method="post" id="form2"  name="form2" action="?s=tablo">
                    <p><input type="submit" id="tablo" name="tablo" value="Tabloyu Olustur"></p>
                </form>
                <?php 
                $num1 = $_POST["sayi1"];
                $num2 = $_POST["sayi2"];
                $haysi = $_POST["islem"];
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
    
                $enson =Dortislem($num1, $num2,$haysi) ; 
                
                $sql = "INSERT INTO sonuc (sayi1, sayi2, islem, sonuc) VALUES ('$num1', '$num2', '$haysi', '$enson')";
                if (mysqli_query($conn, $sql)) {
                    echo "";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
            default: ?> 
        <form method="POST" action="?s=sonuc">
            <label>Sayi1: <input type="text" name="sayi1" id="sayi1"></label><br>
            <label>Sayi2: <input type="text" name="sayi2" id="sayi2"></label><br><br>
            <select name="islem" id="islem">
                <option value="0" selected="selected">Seçiniz</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br><br>
            <input type="submit" name="button" value="Gonder">
        </form>
  <?php break; 
    } ?> 
    </body>
</html>