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

<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Adı: <input placeholder="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri Soyadı: <input placeholder="<?=$sonuc['musteri_soyadi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri TCKNO: <input placeholder="<?=$sonuc['TCKNO']?>"></td>
<td width style="width: 50%">Müşteri Vergi NO: <input placeholder="<?=$sonuc['vergi_no']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Vergi Dairesi: <input placeholder="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri İli: <input placeholder="<?=$sonuc['musteri_adres_ili']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri İlçesi: <input placeholder="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
<td width style="width: 50%">Müşteri Adresi: <input placeholder="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Telefon No: <input placeholder="<?=$sonuc['musteri_telefon_no']?>"></td>
<td width style="width: 50%">Müşteri Eposta Adresi: <input placeholder="<?=$sonuc['musteri_eposta_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Faaliyet Kodu: <input placeholder="<?=$sonuc['musteri_faaliyet_kodu']?>"></td>
<td width style="width: 50%">Müşteri Faaliyet Açıklaması: <input placeholder="<?=$sonuc['musteri_faaliyet_aciklamasi']?>"></td>
</tr>
    
    
</table>    
    
<?php    
}      
      
else if($kurum_mu_sahis_mi==3){  //müşterinin kurum olması durumunda bu tabloyu ortaya çıkar
    
?>    
<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Adı: <input placeholder="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri Vergi NO: <input placeholder="<?=$sonuc['vergi_no']?>"></td>
</tr>

<tr>
<td width style="width: 50%">Müşteri Vergi Dairesi: <input placeholder="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri İli: <input placeholder="<?=$sonuc['musteri_adres_ili']?>"></td>
</tr>

<tr>
<td width style="width: 50%">Müşteri İlçesi: <input placeholder="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
<td width style="width: 50%">Müşteri Adresi: <input placeholder="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Telefon No: <input placeholder="<?=$sonuc['musteri_telefon_no']?>"></td>
<td width style="width: 50%">Müşteri Eposta Adresi: <input placeholder="<?=$sonuc['musteri_eposta_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri Faaliyet Kodu: <input placeholder="<?=$sonuc['musteri_faaliyet_kodu']?>"></td>
<td width style="width: 50%">Müşteri Faaliyet Açıklaması: <input placeholder="<?=$sonuc['musteri_faaliyet_aciklamasi']?>"></td>
</tr>
    
    
</table>
    
<?php    
}      
    
?>
    
<!--    
<table border="1" style="width: 100%">

<tr>
<td width style="width: 50%">Musteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_adi']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_soyadi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['TCKNO']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['vergi_no']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['vergi_dairesi']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_adresi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_adres_ili']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_adres_ilcesi']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
</tr>
<tr>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
<td width style="width: 50%">Müşteri ID: <input placeholder="<?=$sonuc['musteri_id']?>"></td>
</tr>
    
    
</table>
-->
<br>    
<br>    
<br>    
<br>    
<button>Değişiklikleri Kaydet</button>
    

</body>