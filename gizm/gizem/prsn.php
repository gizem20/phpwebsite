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
    <section class="card">
        <div class="cardi">
        <form action="baglan.php" method="post">
            <label for="k_adi"> Müşteri Kullanıcı Adı: </label>
            <input type="text"class="lol1" name="kllanc" id="kadi">
            <label for="sifre">Şifre: </label>
            <input type="password"class="lol1" name="passw" id="sifre">
            <input type="submit" class="lol" name="Kullanici_giris" value="Giriş Yap">

        </form>
    </div>
    </section>

</body>
</html>