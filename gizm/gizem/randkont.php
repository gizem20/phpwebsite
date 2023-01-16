
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

        $conn =new mysqli("localhost","root","","kullanicibilg");
        $sql = "SELECT * FROM rande";

$result = $conn->query($sql);



if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {

        echo "<br/>"." Randevular " ."<br/>". $row["randevu_tarih"]. " " ."<br/>". $row["randevu_saat"]."<br/>". $row["rand_isim"]."<br/><br/>" 

;

    }

} else {

    echo "0 results";

}
    ?></div>


</body>
</html>