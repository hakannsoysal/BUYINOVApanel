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
    <a class="active" href="index.php">Hakkımızda</a>
      <a href="duyuru.html">Duyurular</a>
      <a href="İletisim.php">İletişim</a>
      <a href="giris.php">Giriş Yap</a>
      <a href="kayit_ol.php">Kaydol</a>
     <a href="depoekle.php">Depo</a>
      <a href="takim.html">Takımımız</a>
    </ul>
    </div>
    <div class="container" >
    <form action="İletisim.php" method="post">
      
          <label for="fname">First Name</label>
          <input class="form-control type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input class="form-control type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <label  for="country">Country</label>
          <select class="form-control id="country" name="country">
            <option value="turkey">Türkiye</option>
            <option value="canada">Kanada</option>
            <option value="australia">Avustralya</option>
            <option value="canada">İsveç</option>
            <option value="usa">ABD</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea class="form-control id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input class="btn btn-primary" type="submit" value="Submit">
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