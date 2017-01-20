<html>
ekran4 - Bu ekranda müşteriler listelenecek
    

<?php
$musteri_id = $_GET['musteri_id'];

include '../../url_degiskenleri/url_degiskenleri.php';
include "$config";    
include '../../config_pdo/ver002/config.php';
include "$header";
    
$sorgu=$pdo->prepare("SELECT * FROM musteriler WHERE musteri_id = $musteri_id");
$sorgu->execute();
$sonuc=$sorgu->fetch();
    


?>
    
<head>
        
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>">    
    
</head>    

<body>

<?php

$kurum_mu_sahis_mi=$sonuc['kurum_mu_sahis_mi'];
echo $kurum_mu_sahis_mi;
      
if($kurum_mu_sahis_mi==2){   //müşterinin sahis olması durumunda bu tabloyu ortaya çıkar 
?>    

<form name="form1" action="<?=$ekran5?>">    
<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input name="musteri_id" value="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Adı: <input name="musteri_adi" value="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri Soyadı: <input name="musteri_soyadi" value="<?=$sonuc['musteri_soyadi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri TCKNO: <input name="TCKNO" value="<?=$sonuc['TCKNO']?>"></td>
<td width style="width: 50%">Müşteri Vergi NO: <input name="vergi_no" value="<?=$sonuc['vergi_no']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Vergi Dairesi: <input name="vergi_dairesi" value="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri İli: <input name="musteri_adres_ili" value="<?=$sonuc['musteri_adres_ili']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri İlçesi: <input name="musteri_adres_ilcesi" value="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
<td width style="width: 50%">Müşteri Adresi: <input name="musteri_adresi" value="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Telefon No: <input name="musteri_telefon_no" value="<?=$sonuc['musteri_telefon_no']?>"></td>
<td width style="width: 50%">Müşteri Eposta Adresi: <input name="musteri_eposta_adresi" value="<?=$sonuc['musteri_eposta_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Faaliyet Kodu: <input name="musteri_faaliyet_kodu" value="<?=$sonuc['musteri_faaliyet_kodu']?>"></td>
<td width style="width: 50%">Müşteri Faaliyet Açıklaması: <input name="musteri_faaliyet_aciklamasi" value="<?=$sonuc['musteri_faaliyet_aciklamasi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Web Adresi: <input name="musteri_web_adresi" value="<?=$sonuc['musteri_web_adresi']?>"></td>
<td width style="width: 50%">Müşteri Faaliyet Açıklaması: <input name="musteri_faaliyet_aciklamasi" value="<?=$sonuc['musteri_faaliyet_aciklamasi']?>"></td>
</tr>    
    
<input type="hidden" name="musteri_id" value="<?=$musteri_id?>">    
<input type="hidden" name="kurum_mu_sahis_mi" value="<?=$kurum_mu_sahis_mi?>">    
    
</table> 
<input type="submit" value="Değişiklikleri Kaydetsene">    
</form>    

<?php    
}      
      
else if($kurum_mu_sahis_mi==3){  //müşterinin kurum olması durumunda bu tabloyu ortaya çıkar
    
?>    
<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input name="musteri_id" value="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Adı: <input name="kurum_adi"value="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri Vergi NO: <input name="kurum_vergi_no" value="<?=$sonuc['vergi_no']?>"></td>
</tr>

<tr>
<td width style="width: 50%">Müşteri Vergi Dairesi: <input name="kurum_vergi_dairesi" value="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri İli: <input name="kurum_adres_ili" value="<?=$sonuc['musteri_adres_ili']?>"></td>
</tr>

<tr>
<td width style="width: 50%">Müşteri İlçesi: <input name="kurum_adres_ilcesi" value="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
<td width style="width: 50%">Müşteri Adresi: <input name="kurum_adresi" value="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Telefon No: <input name="kurum_telefon_no" value="<?=$sonuc['musteri_telefon_no']?>"></td>
<td width style="width: 50%">Müşteri Eposta Adresi: <input name="kurum_eposta_adresi" value="<?=$sonuc['musteri_eposta_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Faaliyet Kodu: <input name="kurum_faaliyet_kodu" value="<?=$sonuc['musteri_faaliyet_kodu']?>"></td>
<td width style="width: 50%">Müşteri Faaliyet Açıklaması: <input name="kurum_faaliyet_aciklamasi" value="<?=$sonuc['musteri_faaliyet_aciklamasi']?>"></td>
</tr>
    
    
</table>
    
<?php    
}      
    
?>
    
<!--    
<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input value="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_soyadi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['TCKNO']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['vergi_no']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_adres_ili']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_id']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%">Müşteri ID: <input value="<?=$sonuc['musteri_id']?>"></td>
</tr>
    
    
</table>
-->
<br>    
<br>    
<br>    
<br>    
    

</body>