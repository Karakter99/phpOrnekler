<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
            //Msqli data ni bagladik
            $servername  = "localhost";
            $username = "root";
            $password = "root";
            $dbname= "toplama";

            $conn = mysqli_connect($servername,$username, $password,$dbname);
            if(!$conn)
            {
                die("Error ".mysqli_connect_error());
            }
            
        ?>
        <?php
        //Islemlerimizi su yerde yerine yetiryas

        $sayi1 = $_POST["sayi1"];
        $sayi2 = $_POST["sayi2"];
        $islem = $_POST['islem'];
        $sonuc = 0;

        if($islem == "+")
        {
            $sonuc = $sayi1 + $sayi2;
        }
        else if($islem == "-")
        {
            $sonuc = $sayi1 - $sayi2;
        }
        else if($islem == "*")
        {
            $sonuc = $sayi1 * $sayi2;
        }
        else if($islem == "/")
        {
            $sonuc =round( $sayi1 / $sayi2,2);
        }

        $add = "INSERT INTO hesapla(sayi1,sayi2,islem,sonuc) VALUES('$sayi1','$sayi2','$islem','$sonuc')";

        if(mysqli_query($conn,$add))
        {
            echo "";
        }
        else
        {
            echo "ERROR".$add."<br>".mysqli_error($conn);
        }

        ?>
        <form action="" method="POST">
            <p>
                <label>Sayi1:  </label>
                <input type="text" name="sayi1" id="sayi1">
            </p>
            <p>
                <label>Sayi2:  </label>
                <input type="text" name="sayi2" id="sayi2">
            </p>
            <p>
                <select name="islem" id="islem">
                    <option value="0" selected="selected">Seçiniz</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </p>
            <input type="submit" value="Gonder" id="gonder" name="gonder">
        </form>
    </body>
</html>