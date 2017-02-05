<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<?php    
include '../../config_pdo/ver002/config.php';
include '../../url_degiskenleri/url_degiskenleri.php' ;
include "$header";
?>  
    
<head>
        
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>">
            
</head>
<body>
    
<form name="form1" action="#">
<table cellspacing="20" border="0">
<tr>    
    <td></td><td>Görüşme Tarihi:</td><td><input type="date" name="gorusme_tarihi"></td>    
</tr>    

<tr>    
    <td><button style="width:100%">Firma Ekle</button></td><td>Firma Adı:</td><td><select name="firma_adi"></select></td>    
</tr>    

<tr>    
    <td><button style="width:100%">İlave Görüşen</button></td><td>Görüşen Adı - Soyadı:</td><td><select name="gorusen_adi_soyadi"></select></td>    
</tr>    
    
<tr>    
    <td></td><td>Görüşülen Kişi Ünvanı:</td><td><select name="gorusulen_unvani"></select></td>    
</tr>    
    
<tr>    
    <td><button style="width:100%">Kişi Ekle</button></td><td>Görüşülen Kişi Adı - Soyadı:</td><td><select name="gorusulen_adi_soyadi"></select></td>    
</tr>    
    
<tr>
<td><button style="width:100%">İlave Görüşülen</button></td>    
</tr>    
    
<tr>    
    <td></td><td>Görüşme Konusu:</td><td><input type="text" name="gorusme_konusu"></td>    
</tr>    
    
 
<tr>    
    <td></td><td>Görüşme Özeti:</td><td><input type="text" name="gorusme_ozeti"></td>    
</tr>    
    
 
<tr>    
    <td></td><td>Görüşme Yeri:</td><td><input type="text" name="gorusme_yeri"></td>    
</tr>        
    
<tr>    
    <td>a</td><td></td><td></td>    
</tr>        

<tr>    
    <td>a</td><td></td><td></td>    
</tr>        
    
    
<tr>
<td></td><td><input type=submit style="width:70%" value="Kaydet"></td><td><button style="width:70%">İptal</button></td>
</tr>    
    
    
    
    
</table>
</form>    
    
    
    
    
    
    
    
    
    
<?php    
$query= $pdo->prepare("SELECT musteri_tipi1_id,musteri_tipi1_adi FROM musteri_tipi1");
$query -> execute();
$result = $query->fetch();

?>          
        
<?php include "$footer";    ?>    
</body>

</html>
