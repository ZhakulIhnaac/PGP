<html>

ekran3 - Bu ekranda müşteriler listelenecek
    
<?php 

include '../../url_degiskenleri/url_degiskenleri.php';
include "$config";    
include '../../config_pdo/ver002/config.php';
include "$header";



$sorgu=$pdo->prepare("SELECT * FROM musteriler");
$sonuc=$sorgu->execute();



?>
<head>
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>">    
</head>
    
    
<br>    
<a href=<?="$ekran1"?>>Müşteri Ekle</a>    

<br>    
<table border="1">
<tr>
<td>Müşteri ID</td><td>Müşteri Adı</td><td>Müşteri Soyadı</td><td>TCKNO</td><td>Vergi No</td><td>Vergi Dairesi</td><td>Müşteri Adresi</td><td>Müşteri İli</td>
<td>Müşteri İlçesi</td><td>Müşteri Telefon</td><td>Müşteri Eposta</td><td>Müşteri Web Adresi</td><td>Müşteri Faaliyet Kodu</td><td>Müşteri Faaliyet Açıklaması</td>    
</tr>    
    
    
<?php

foreach($sonuc=$sorgu->fetchAll() as $deger){
echo '<tr><td>';

print_r($deger['musteri_id']); 

echo '</td><td>'; 
print_r($deger['musteri_adi']); 
echo '</td><td>';
print_r($deger['musteri_soyadi']); 
echo '</td><td>';
print_r($deger['TCKNO']); 
echo '</td><td>';
print_r($deger['vergi_no']); 
echo '</td><td>';
print_r($deger['vergi_dairesi']); 
echo '</td><td>';
print_r($deger['musteri_adresi']); 
echo '</td><td>';
print_r($deger['musteri_adres_ili']); 
echo '</td><td>';
print_r($deger['musteri_adres_ilcesi']); 
echo '</td><td>';
print_r($deger['musteri_telefon_no']); 
echo '</td><td>';
print_r($deger['musteri_eposta_adresi']); 
echo '</td><td>';
print_r($deger['musteri_web_adresi']);
echo '</td><td>';
print_r($deger['musteri_faaliyet_kodu']);
echo '</td><td>';
print_r($deger['musteri_faaliyet_aciklamasi']); 
    
    

    

    
echo '</td></tr>';

    
    
    
    
}
    
?>
</table>
    
<?php include "$footer";    ?>
    