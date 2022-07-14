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
        } ?>
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

    </body>
</html>