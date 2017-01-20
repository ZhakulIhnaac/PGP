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
<br>    
<br>    
<br>    
<br>    
<button>Değişiklikleri Kaydet</button>
    

</body>