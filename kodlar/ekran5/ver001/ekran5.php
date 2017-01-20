<html>
ekran5
<br>
Burada Gerekli Değişiklikler Yapılıp Tekrar Müşterileri Listele sayfasına gidilecek
<br>
2sn bu sayfada kalıp
<br>
müşterilerin listelendiği sayfaya gidilecek
<?php

include '../../config_pdo/ver002/config.php';
include '../../url_degiskenleri/url_degiskenleri.php' ;

$kurum_mu_sahis_mi = $_GET['kurum_mu_sahis_mi'];    
$musteri_id = $_GET['musteri_id'];    

    
echo $musteri_id ;
    
if($kurum_mu_sahis_mi==2){
    
//  şahısa ait olan bilgiler    
    
$musteri_id = $_GET['musteri_id'];    
$musteri_adi = $_GET['musteri_adi'];
$musteri_soyadi = $_GET['musteri_soyadi'];
$TCKNO = $_GET['TCKNO'];
$vergi_no= $_REQUEST['vergi_no'];
$vergi_dairesi= $_GET['vergi_dairesi'];
$musteri_adresi= $_GET['musteri_adresi'];
$musteri_adres_ili= $_GET['musteri_adres_ili'];
$musteri_adres_ilcesi= $_GET['musteri_adres_ilcesi'];
$musteri_telefon_no= $_GET['musteri_telefon_no'];
$musteri_eposta_adresi= $_GET['musteri_eposta_adresi'];
$musteri_web_adresi= $_GET['musteri_web_adresi'];
$musteri_faaliyet_kodu= $_GET['musteri_faaliyet_kodu'];
$musteri_faaliyet_aciklamasi= $_GET['musteri_faaliyet_aciklamasi'];

}    

if($kurum_mu_sahis_mi==3){    
    
//  kuruma ait olan bilgiler    
        
$kurum_adi = $_GET['kurum_adi'];
$kurum_vergi_no= $_GET['kurum_vergi_no'];
$kurum_vergi_dairesi= $_GET['kurum_vergi_dairesi'];
$kurum_adresi= $_GET['kurum_adresi'];
$kurum_adres_ili= $_GET['kurum_adres_ili'];
$kurum_adres_ilcesi= $_GET['kurum_adres_ilcesi'];
$kurum_telefon_no= $_GET['kurum_telefon_no'];
$kurum_eposta_adresi= $_GET['kurum_eposta_adresi'];
$kurum_web_adresi= $_GET['kurum_web_adresi'];
$kurum_faaliyet_kodu= $_GET['kurum_faaliyet_kodu'];
$kurum_faaliyet_aciklamasi= $_GET['kurum_faaliyet_aciklamasi'];

}    
    
//kurum_mu_sahis_mi eğer 2 ise kurum kişilik eğer 2 ise kurum olmuş oluyor.
//bu if sayesinde müşteri şahıs ise şahıs insert'ini, tüzel kişilik ise tüzel kişilik insertini çalıştırıyor.

if($kurum_mu_sahis_mi==3){
//eğer profil kurum ise kurum update'i yap

    
    
$sorgu = $pdo->prepare("UPDATE musteriler SET 
musteri_adi = :musteri_adi,
musteri_soyadi = :musteri_soyadi,
TCKNO = :TCKNO,
vergi_no = :vergi_no,
vergi_dairesi = :vergi_dairesi,
musteri_adresi = :musteri_adresi,
musteri_adres_ili = :musteri_adres_ili,
musteri_adres_ilcesi = :musteri_adres_ilcesi,
musteri_telefon_no = :musteri_telefon_no,
musteri_eposta_adresi = :musteri_eposta_adresi,
musteri_web_adresi = :musteri_web_adresi,
musteri_faaliyet_kodu = :musteri_faaliyet_kodu,
musteri_faaliyet_aciklamasi = :musteri_faaliyet_aciklamasi,
kurum_mu_sahis_mi = :kurum_mu_sahis_mi

WHERE musteri_id = :musteri_id");

    
$sorgu -> bindvalue(":musteri_id", $musteri_id);
$sorgu -> bindvalue(":musteri_adi", $kurum_adi);
$sorgu -> bindvalue(":musteri_soyadi", $musteri_soyadi);
$sorgu -> bindvalue(":TCKNO", $TCKNO);
$sorgu -> bindvalue(":vergi_no", $kurum_vergi_no);
$sorgu -> bindvalue(":vergi_dairesi", $kurum_vergi_dairesi);
$sorgu -> bindvalue(":musteri_adresi", $kurum_adresi);
$sorgu -> bindvalue(":musteri_adres_ili", $kurum_adres_ili);
$sorgu -> bindvalue(":musteri_adres_ilcesi", $kurum_adres_ilcesi);
$sorgu -> bindvalue(":musteri_telefon_no", $kurum_telefon_no);
$sorgu -> bindvalue(":musteri_eposta_adresi", $kurum_eposta_adresi);
$sorgu -> bindvalue(":musteri_web_adresi", $kurum_web_adresi);
$sorgu -> bindvalue(":musteri_faaliyet_kodu", $kurum_faaliyet_kodu);
$sorgu -> bindvalue(":musteri_faaliyet_aciklamasi", $kurum_faaliyet_aciklamasi);
$sorgu -> bindvalue(":kurum_mu_sahis_mi", $kurum_mu_sahis_mi);
    
$sorgu -> execute();
    
}    

if($kurum_mu_sahis_mi==2){
//eğer profil şahıs ise şahıs update'i yap
    
$sorgu = $pdo->prepare("UPDATE musteriler SET 
musteri_adi = :musteri_adi,
musteri_soyadi = :musteri_soyadi,
TCKNO = :TCKNO,
vergi_no = :vergi_no,
vergi_dairesi = :vergi_dairesi,
musteri_adresi = :musteri_adresi,
musteri_adres_ili = :musteri_adres_ili,
musteri_adres_ilcesi = :musteri_adres_ilcesi,
musteri_telefon_no = :musteri_telefon_no,
musteri_eposta_adresi = :musteri_eposta_adresi,
musteri_web_adresi = :musteri_web_adresi,
musteri_faaliyet_kodu = :musteri_faaliyet_kodu,
musteri_faaliyet_aciklamasi = :musteri_faaliyet_aciklamasi,
kurum_mu_sahis_mi = :kurum_mu_sahis_mi

WHERE musteri_id = :musteri_id");
    
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
$sorgu -> bindvalue(":kurum_mu_sahis_mi", $kurum_mu_sahis_mi);
    
$sorgu -> execute();
    
}

?>

<form name="form1" action="<?=$ekran5?>">
<input type="hidden" name="musteri_id" value="<?=$musteri_id?>">     
</form>    
    

<meta http-equiv="refresh" content="2;URL=<?=$ekran3?>">    


</html>