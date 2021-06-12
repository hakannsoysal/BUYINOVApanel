<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="sweetalert2.all.min.js"></script>
    <title>İletişim</title>
</head>
<body>
  <div class="topnav">
    <ul>
    <a  href="index.php">Anasayfa</a>
      <a href="index.php">Duyurular</a>
      <a class="active" href="İletisim.php">İletişim</a>
      <a href="giris.php">Giriş Yap</a>
      <a href="kayit_ol.php">Kaydol</a>
     <a href="depoekle.php">Depo</a>
      <a href="takim.html">Takımımız</a>
    </ul>
    </div>
    <div class="container" >
    <form action="İletisim.php" method="post">
      
          <label for="ad">Ad</label>
          <input class="form-control type="text" id="ad" name="ad" placeholder="Adınız">
      
          <label for="soyad">Soyad</label>
          <input class="form-control type="text" id="soyad" name="soyad" placeholder="Soyadınız">
      
          <label  for="ulke">Ülke</label>
          <select class="form-control id="country" name="ulke">
            <option value="turkiye">Türkiye</option>
            <option value="kanada">Kanada</option>
            <option value="avustralya">Avustralya</option>
            <option value="isvec">İsveç</option>
            <option value="abd">ABD</option>
          </select>
      
          <label for="konu">Konu</label>
          <textarea class="form-control id="konu" name="subject" placeholder="Bir şeyler yazın.." style="height:200px"></textarea>
      
          <input class="btn btn-primary" type="gonder" value="Gönder">
          <?php
if($_POST)
{
    echo '<script>Swal.fire("Başarılı", "Mesajınız bize ulaştı", "success"); </script>';
}
?>

      
        </form>
      </div>
            
</body>
</html>