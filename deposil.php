<link rel="stylesheet" href="style.css">
<div class="topnav">
<ul>
<a class="active" href="index.php">Hakkımızda</a>
  <a href="index.php">Duyurular</a>
  <a href="İletisim.php">İletişim</a>
  <a href="giris.php">Giriş Yap</a>
  <a href="kayit_ol.php">Kaydol</a>
 <a href="depoekle.php">Depo</a>
  <a href="takim.html">Takımımız</a>
</ul>
</div>
<?php 


  $id = $_GET["id"];

  $select = $db->prepare("select * from depo where dosya_id=?");
  $select->execute(array($id));
  $bul =  $select->fetch(PDO::FETCH_ASSOC); 
  
 unlink($bul["dosya_ad"]);  
 
 
    $sil = $db->prepare("delete from depo where dosya_id=?");
	$ok = $sil->execute(array($id));
	
	if($ok){
		
		echo "<h2>Dosya basarıyla silindi</h2>";
		
		header("refresh: 2; url=depoindex.php");
		
	}else {
		
	 echo "<h2>Dosya silinirken bir hata olustu..</h2>";	
		
		
	}
	

?>