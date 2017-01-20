<html>
ekran2
<br>
Burada Müşteriler Listelenecek
<br>
2sn bu sayfada kalıp
<br>
müşterilerin listelendiği sayfaya gidilecek
<?php

include '../../config_pdo/ver002/config.php';
include '../../url_degiskenleri/url_degiskenleri.php' ;

$musteri_id = $pdo->lastInsertId();

echo $musteri_id ;
$musteri_adi = $_GET['musteri_adi'];
$musteri_soyadi = $_GET['musteri_soyadi'];
$TCKNO = $_GET['TCKNO'];
$vergi_no= $_GET['vergi_no'];
$vergi_dairesi= $_GET['vergi_dairesi'];
$musteri_adresi= $_GET['musteri_adresi'];
$musteri_adres_ili= $_GET['musteri_adres_ili'];
$musteri_adres_ilcesi= $_GET['musteri_adres_ilcesi'];
$musteri_telefon_no= $_GET['musteri_telefon_no'];
$musteri_eposta_adresi= $_GET['musteri_eposta_adresi'];
$musteri_web_adresi= $_GET['musteri_web_adresi'];
$musteri_faaliyet_kodu= $_GET['musteri_faaliyet_kodu'];
$musteri_faaliyet_aciklamasi= $_GET['musteri_faaliyet_aciklamasi'];

$sorgu = $pdo->prepare("INSERT INTO musteriler(musteri_id, musteri_adi, musteri_soyadi, TCKNO, vergi_no, vergi_dairesi, musteri_adresi, musteri_adres_ili, musteri_adres_ilcesi, musteri_telefon_no, musteri_eposta_adresi, musteri_web_adresi, musteri_faaliyet_kodu, musteri_faaliyet_aciklamasi) 
VALUES (:musteri_id, :musteri_adi, :musteri_soyadi, :TCKNO, :vergi_no, :vergi_dairesi, :musteri_adresi, :musteri_adres_ili, :musteri_adres_ilcesi, :musteri_telefon_no, :musteri_eposta_adresi, :musteri_web_adresi, :musteri_faaliyet_kodu, :musteri_faaliyet_aciklamasi)");

$sorgu -> bindvalue(":musteri_id", $musteri_id);
$sorgu -> bindvalue(":musteri_adi", $musteri_adi);
$sorgu -> bindvalue(":musteri_soyadi", $musteri_soyadi);
$sorgu -> bindvalue(":TCKNO", $TCKNO);
$sorgu -> bindvalue(":vergi_no", $vergi_no);
$sorgu -> bindvalue(":vergi_dairesi", $vergi_dairesi);
$sorgu -> bindvalue(":musteri_adresi", $musteri_adresi);
$sorgu -> bindvalue(":musteri_adres_ili", $musteri_adres_ili);
$sorgu -> bindvalue(":musteri_adres_ilcesi", $musteri_adres_ilcesi);
$sorgu -> bindvalue(":musteri_telefon_no", $musteri_telefon_no);
$sorgu -> bindvalue(":musteri_eposta_adresi", $musteri_eposta_adresi);
$sorgu -> bindvalue(":musteri_web_adresi", $musteri_web_adresi);
$sorgu -> bindvalue(":musteri_faaliyet_kodu", $musteri_faaliyet_kodu);
$sorgu -> bindvalue(":musteri_faaliyet_aciklamasi", $musteri_faaliyet_aciklamasi);

$sorgu -> execute();

$musteri_id = $pdo->lastInsertId();

?>
    
<meta http-equiv="refresh" content="2;URL=<?=$ekran3?>">    
    
</html>