﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gossip Kitabevi</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="disdiv">
  <?php 
  include("include/ayar.php");

  include("include/ustmenu.php");?>
  <?php include("include/yanmenu.php");
  
 ?>
   
    
   
    
    

  <div class="orta">
  <?php
  $numara=1;
  $aranan=$_POST["kitapara"];
  $eklelog=mysql_query("insert into log(idKullanici,Sayfa,Tarih) VALUES('$sid1','$aranan. Kitabını Aradı','$tarihlog')");
  $arama=mysql_query("Select * from kitaplar where KitapAd='$aranan'");
while($arama1=mysql_fetch_array($arama)or die(" <br> $numara. Kitap Aradığınız <hr> kitap bulunamadı.. Arama motorumuz  büyük küçük harf'e duyarlıdır.".mysql_error())){
	
	echo " $numara. Kitap <hr> <table width='630' align='center' >
  <tr>
    <td colspan='3' align='center'><img src=$arama1[Resim] width='400' height='500' /></td>
 
  </tr>
  <tr>
    <td>Kitabın Adı</td>
	<td>:</td>
    <td>$arama1[KitapAd]</td>
  </tr>
   <tr>
    <td>Yazarın Adı</td>
	<td>:</td>
    <td>$arama1[YazarAd]</td>
	
  </tr>
   <tr>
    <td>Yayın Evi</td>
	<td>:</td>
    <td>$arama1[YayinEvi]</td>
	
  </tr>
   <tr>
    <td>Basım Tarihi</td>
	<td>:</td>
    <td>$arama1[BasimTarihi]</td>
	
  </tr>
   <tr>
    <td>Kitap Sayısı</td>
	<td>:</td>
    <td>$arama1[Adet] Tane</td>
	
  </tr> 
   <tr>
    <td>Kitap Fiyatı</td>
	<td>:</td>
    <td>$arama1[Fiyat] TL</td>
	
  </tr>
   <tr>
    <td>Teslimat Süresi</td>
	<td>:</td> 
    <td>$arama1[TedarikSuresi] Gün </td>
	
  </tr>
     <tr>
    <td><a href='sepetim.php?kitap=$arama1[idKitap]'>Sepete Ekle</a></td>
  </tr>
 
<table>
</table>
<hr>
<tr>
<td>Açıklama :</td>
</tr>
 <tr >
    

    <td>$arama1[Aciklama]  </td>
	
  </tr>
  </table>
  <hr>

";


  $numara++;

	
	
	
}
	



  ?>
  
  </div>
  <?php include("include/altmenu.php");?>
  
</div>


</body>
</html>
