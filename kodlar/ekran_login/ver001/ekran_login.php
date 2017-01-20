<html>

<?php
include '../../config_pdo/ver002/config.php';    
include '../../url_degiskenleri/url_degiskenleri.php';
include "$header";
?>    
    
<head>
<link rel="stylesheet" type="text/css" href="<?=$css_dosyasi?>"
</head>    
    

    
<form action="../../ekran_login2/ver001/ekran_login2.php">
<table>    
<tr>
<td>Kullanıcı Adı: <input type="text" name="kullanici_adi">  </input></td>
</tr>    
<tr>
<td>Şifre: <input type="password" name="sifre"> </input></td>
</tr>
<tr>

<tr>
<td>kullanıcı adı: admin şifre: 1234</td>
</tr>    
    
<td><input type="submit"></input></td>
</tr>
</table>
</form>





<?php include "$footer";    ?>

</html>