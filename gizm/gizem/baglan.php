
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

$kadi = "müşteri";
$sifrem = "9617";
if($_POST) {
    
    $postKadi = addslashes($_POST["kllanc"]);
    $postSifre= addslashes($_POST["passw"]);
    if($kadi == $postKadi && $sifrem == $postSifre) {
        include'dosya.php';

    }else {
        echo " Kullanıcı adı veya şifre hatalı!";

            header("refresh:5;url=prsn.php");
    }
    
}

    ?>
    </div>

    
</body>
</html>