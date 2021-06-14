<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="CssFile/style.css">
  <link rel="stylesheet" href="CssFile/styles.css">
  <link rel="stylesheet" href="CssFile/duyuru.css">
  <script src="script.js"></script>


</head>
<body >

<div class="topnav">
<ul>
<a class="active" href="#Anasayfa">Anasayfa</a>
  <a href="İletisim.php">İletişim</a>
  <a style="  float: right;" href="admin.php">Admin</a>
  <a style="  float: right;" href="giris.php">Giriş Yap</a>
  <a style="  float: right;" href="kayit_ol.php">Kaydol</a>
  <a href="takim.html">Takımımız</a>


</ul>
</div>

<div class="#main" id="Anasayfa">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


  <div class="slideshow-container">

  <div class="mySlides fade">
    <img src="resimler/photo.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="resimler/photo1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="resimler/photo2.jpg" style="width:100%">
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

<div class="#main" id="Duyuru">

<button class="accordion">BÖLÜMÜMÜZ ÖĞRENCİLERİNDEN UYGULAMALI SİBER GÜVENLİĞE GİRİŞ EĞİTİMİ</button>
<div class="panel">
  <p> Bartın Üniversitesi Yazılım ve İnovasyon Kulübü 17.04.2021 tarihinde Uygulamalı Siber Güvenliğe Giriş eğitimi gerçekleştirdi.</p>
  <p> BUYİNOVA Youtube kanalından canlı olarak yayınlanan eğitimde Linux işletim sistemi, dağıtımları, temel dosya işlemleri, Linux'un farkları ve avantajları ile Linux'da kullanılan komutlar üzerinde duruldu. </p>
  <p> Etkinliğin sonunda soru/cevap oturumu yapıldı. Eğitimi Siber Güvenlik alanında çalışmalar yapan ve kulübümüzün yönetim kurulunda yer alan üç arkadaşımız verdi.</p>


</div>

<button class="accordion">Siber Kulüpler Birliği Destekli Proje Gruplarında Bulunmak İster Misiniz?</button>
<div class="panel">
  <p>Bartın Üniversitesi Yazılım ve İnovasyon Kulübü(BUYİNOVA) bünyesinde Siber Kulüpler Birliği ile beraber yürütülen Siber Güvenlik Alanındaki Ar&Ge Projelerinde yer almak istiyorsanız formu doldurmanız gerekmektedir.</p>
  <p>Form <a href="https://forms.gle/saWNriPW8o6n6mcr6">linki</a></p>
</div>

<button class="accordion">Üniversite Öğrencilerine Yönelik Proje Yarışmaları</button>
<div class="panel">
  <p>Bilim İnsanı Destek Programları Başkanlığınca üniversite öğrencilerini ülkemizin ihtiyaç duyduğu öncelikli alanlarda çalışmalar yapmaya yönlendirmek amacıyla 2238 Girişimcilik ve Yenilikçilik Yarışması, 2241 Özel Sektöre Yönelik Lisans Bitirme Tezleri Yarışması ve 2242 Öncelikli Alanlarda Üniversite Öğrencileri Proje Yarışması her yıl eş zamanlı olarak düzenlenmektedir.</p>
</div>


<!-- slide show script  -->
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>


<!-- duyuru script  -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

<?php
require('footer.PHP');
?>
</body>
</html>
