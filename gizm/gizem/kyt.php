
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="eow">
        <div class="logo"><img src="/mali/mil.png" class="imglog" alt=""></div>
        <nav >
            <ul>
                <div class="air"><div>
                <li>
                    <a class="navicerk" href="index.php">Anasayfa</a></li>
                    </div><div>  <li >
                    <a class="navicerk" href="prsn.php">Randevu Al</a></li>
                    </div><div><li >
                    <a class="navicerk" href="musteri.php">Diyetisyen Giriş</a></li>
                    </div> </div></ul>
        </nav>
    </header>
<div class="container">
    <?php

        $trhrnd=$_POST["tarih"];
        $trhst=$_POST["saat"];
        $ismt=$_POST["ism"];

        $conn =new mysqli("localhost","root","","kullanicibilg");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sqlsor = "SELECT * FROM rande WHERE randevu_tarih LIKE '".$trhrnd."' AND randevu_saat LIKE '".$trhst."'";
        $result = $conn->query($sqlsor);
        
        
        
        if ($result->num_rows > 0) {
        
        
            while($row = $result->fetch_assoc()) {
        
                echo " BU TARİHTE ZATEN BİR RANDEVU MEVCUT "
        
        ;
        header("refresh:4;url=prsn.php");

        
        }
        
        }else{
            $sql = "INSERT INTO rande (randevu_tarih,randevu_saat,rand_isim) VALUES ( '".$trhrnd."', '".$trhst."', '".$ismt."')";
            if (mysqli_query($conn, $sql)) {
            echo "Randevunuz alınmıstır";
            header("refresh:4;url=randkont.php");
            }  
        
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
                
        }

    ?></div>

</body>
</html>